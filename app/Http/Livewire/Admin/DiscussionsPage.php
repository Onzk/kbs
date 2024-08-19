<?php

namespace App\Http\Livewire\Admin;

use App\Models\Chat;
use Livewire\Component;
use App\Models\Candidate;
use App\Models\Entreprise;
use Illuminate\Support\Str;
use Livewire\Attributes\Url;
use Illuminate\Support\Facades\Auth;

class DiscussionsPage extends Component
{
    #[Url(keep: true, except: 0)]
    public $tab = 0;

    #[Url(keep: true, except: "", as: "q")]
    public $search = "";

    private array $class_map = [Candidate::class, Entreprise::class];

    public string $current_id = "", $current_id_key = "", $message = "";

    public $current_model = null;

    public function mount()
    {
        $this->tab %= 2;
    }

    public function boot()
    {
        $this->tab %= 2;
    }

    public function updatedTab()
    {
        $this->tab = $this->tab %= 2;
    }

    public function updatedCurrentId()
    {
        $class = explode("\\", $this->class_map[$this->tab]);
        $this->current_id_key = strtolower(end($class)) . "_id";
        $this->current_model = $this->class_map[$this->tab]::find($this->current_id);
        $this->current_id = $this->current_model?->id ?? "";
        $this->dispatch("scrollDown");
    }

    public function loadData()
    {
        $models = $this->class_map[$this->tab]::all()
            ->sortBy(fn($m) => $m->get_last_message()?->created_at, descending: true);
        if (strlen(trim($this->search)))
        {
            return $models->filter(function ($model) {
                $model_string = join(" ", array_values($model->toArray()));
                return Str::contains(strtolower($model_string), explode(" ", strtolower(trim($this->search))));
            });
        }
        return $models;
    }

    public function send()
    {
        if (strlen(trim($this->message)))
        {
            $user = Auth::guard("web")->user();
            Chat::create([
                "user_id" => $user->id,
                $this->current_id_key => $this->current_id,
                "content" => trim($this->message),
            ]);
            $this->message = "";
            $this->dispatch("scrollDown");
        }
    }

    public function loadChats()
    {
        if (strlen(trim($this->current_id)))
        {
            $chats = Chat::all()
                ->where($this->current_id_key, $this->current_id);
            $chats->where("readed", false)->whereNull("user_id")
                ->each(fn($m) => $m->update(["readed" => true]));
            return $chats;
        }
        return [];
    }

    public function render()
    {
        return view('.admin.discussions-page', [])
            ->extends('admin.layouts.base')
            ->section('admin.base.body')
            ->layoutData(['admin_space_title' => 'Discussions']);
    }
}
