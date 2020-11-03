<?php

namespace App\Entities;

use CodeIgniter\Entity;

class Resume extends Entity
{
    public function setGambar($file)
    {   
        $gambar = $file->getRandomName();
        $writePath1 = './uploads';
        $file->move($writePath1, $gambar);
        $this->attributes['cv'] = $gambar;
        return $this;
    }
}
