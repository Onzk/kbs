<?php

namespace App\Http\Livewire\Public;

use App\Models\Post;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Question;
use Illuminate\Support\Facades\Validator;


class BlogComment extends Component
{
    public Post $post;

    public array $state = [];

    public function mount(){
        // $this->post->update(["comments" => '[]']);
    }

    public function saveComment()
    {
        Validator::make($this->state, [
            "lastname" => "required|min:3",
            "firstname" => "required|min:3",
            "email" => "required|email",
            "content" => "required|min:2|max:255",
        ])->validate();
        $comments = json_encode(array_filter([
            [...$this->state, "created_at" => Carbon::now()],
            ...$this->post->get_comments(),
        ]), true);
        $this->post->update(["comments" => $comments]);
        $this->post->refresh();
        $this->state["content"] = "";
        session()->flash("success", "Commentaire enregistré avec succès.");
    }

    public function render()
    {
        return view("public.blog-comment");
    }
}
