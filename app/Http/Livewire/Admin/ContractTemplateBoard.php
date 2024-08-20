<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Url;
use Livewire\WithFileUploads;
use App\Models\ContractTemplate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ContractTemplateBoard extends Component
{
    use WithFileUploads;

    public $demo, $main_file;

    public array $state = [];

    public string $current_id = "";


    #[Url(except: "")]
    public $search = "";

    public function mount()
    {
        $this->reload();
    }

    public function updatedDemo()
    {
        if (!Str::endsWith(strtolower($this->demo->getRealPath()), [".pdf"]))
        {
            session()->flash("error", __("Type de fichier invalide. PDF uniquement."));
            return;
        }
        $model = ContractTemplate::find($this->current_id);
        if($model){
            $fileName = "$model->id.pdf";
            $path = "storage/contract-template/demo/$fileName";
            $this->demo->storeAs("public/contract-template/demo", $fileName);
            File::delete($this->demo->getRealPath());
            $model->update(["demo" => $path]);
            $model->refresh();
            return redirect(route('admin-space.contract-template-board'))
                ->with("success", __("Document de démonstration modifié avec succès."));
        }
        $this->reload();
    }

    public function updatedMainFile()
    {
        if (!Str::endsWith(strtolower($this->main_file->getRealPath()), [".doc", ".docx"]))
        {
            session()->flash("error", __("Type de fichier invalide. DOC/DOCX uniquement."));
            File::delete($this->main_file->getRealPath());
            return;
        }
        $model = ContractTemplate::find($this->current_id);
        if($model){
            $fileName = "$model->id.pdf";
            $path = "storage/contract-template/file/$fileName";
            $this->main_file->storeAs("public/contract-template/file", $fileName);
            File::delete($this->main_file->getRealPath());
            $model->update(["file" => $path]);
            $model->refresh();
            return redirect(route('admin-space.contract-template-board'))
                ->with("success", __("Document principal modifié avec succès."));
        }
        $this->reload();
    }

    public function addOrUpdateModel()
    {
        $model = ContractTemplate::find($this->current_id);
        if ($model)
        {
            Validator::make($this->state, [
                "title" => "required|min:4|max:120|unique:contract_templates,title,{$model->id},id",
                "price" => "required|numeric|min:0",
                "description" => "required|min:4",
            ])->validate();
            $model->update($this->state);
            session()->flash('success', __('Modifications effectuées avec succès.'));
        } else
        {
            Validator::make($this->state, [
                "title" => "required|min:4|max:120|unique:contract_templates,title",
                "price" => "required|numeric|min:0",
                "description" => "required|min:4",
            ])->validate();
            ContractTemplate::create($this->state);
            session()->flash('success', __('Enregistrement effectué avec succès.'));
        }
        $this->reload();
    }

    public function updatedCurrentId()
    {
        $model = ContractTemplate::find($this->current_id);
        if ($model)
        {
            $this->state = $model->toArray();
        }
    }

    public function deleteModel($id)
    {
        $model = ContractTemplate::find($id);
        if ($model)
        {
            ContractTemplate::destroy($model->id);
            try
            {
                $oldPath = str_replace("storage", "public", $model->demo);
                if (Storage::fileExists($oldPath)) File::delete($model->demo);
                $oldPath = str_replace("storage", "public", $model->file);
                if (Storage::fileExists($oldPath)) File::delete($model->file);
            } catch (\Exception $ex)
            {
            }
            session()->flash(
                'success', __("Modèle supprimé avec succés.")
            );
        }
    }

    public function loadData()
    {
        if (strlen(trim($this->search)))
        {
            $models = collect(ContractTemplate::get());
            return $models->filter(function ($model) {
                $model_string = join(" ", array_values($model->toArray()));
                return Str::contains(strtolower($model_string), explode(" ", strtolower(trim($this->search))));
            });
        }
        return ContractTemplate::paginate(15);
    }

    public function reload()
    {
        $this->current_id = "";
        $this->state = [];
    }

    public function render()
    {
        return view(".admin.contract-template-board")
            ->extends("admin.layouts.base")
            ->section("admin.base.body")
            ->layoutData([
                "admin_space_title" => "Modèles de Contrat",
            ]);
    }
}
