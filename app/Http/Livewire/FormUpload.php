<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Livewire\Component;
use App\Models\Post;

class FormUpload extends Component implements HasForms
{
    use InteractsWithForms;

    public Post $post;

    public $title;
    public $content;
    public $image;

    public function mount(){
        $this->form->fill();
    }

    public function render()
    {
        return view('livewire.form-upload');
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title')->required(),
            MarkdownEditor::make('content'),
            FileUpload::make('image')->avatar()

            // SpatieMediaLibraryFileUpload::make('avatar')->avatar(),
        ];
    }

    protected function getFormModel(): string
    {
        return Post::class;
    }
}
