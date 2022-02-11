<?php

namespace App\Service;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUploader
{
    public function createFileName(UploadedFile $uploadedFile): string
    {
        return uniqid() . '.' . $uploadedFile->guessExtension();
    }

    /**
     * This method can be used with any form
     * we specify the name of the field where the image is located and the target folder where to place it
     * 
     * @param Form 
     * @param string 
     * @param string 
     * @return string 
     */
    public function uploadImage(Form $form, string $fieldName, string $targetDirectory): string
    {
        // Retrieving the uploaded file from the file field
        $uploadedFile = $form->get($fieldName)->getData();

        // In order not to overwrite files we must make sure their names are unique
        // We use uniqid () for the name and guessExtension () for the extension declared in the createFileName () method above
        $newFilename = $this->createFileName($uploadedFile);
        $uploadedFile->move($targetDirectory, $newFilename);

        // We return the new name of the file
        return $newFilename;
    }

    public function uploadUserImage(Form $form)
    {
        $user = $form->getData();

        // Declaration of a variable in the .env : $_ENV['DOSSIER_IMAGES']
        // designating the folder where users' images will be stored
        $newFilename = $this->uploadImage($form, 'image', $_ENV['USER_IMAGES']);
        $user->setImage($newFilename);
    }

    public function uploadCommentImage(Form $form)
    {
        $commentImage = $form->getData();

        $newFilename = $this->uploadImage($form, 'image', $_ENV['COMMENT_IMAGES']);
        $commentImage->setImage($newFilename);
    }

    public function uploadItemImage(Form $form)
    {
        $item = $form->getData();

        $newFilename = $this->uploadImage($form, 'image', $_ENV['ITEM_IMAGES']);
        $item->setImage($newFilename);
    }
}
