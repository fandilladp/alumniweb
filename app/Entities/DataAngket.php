<?php

namespace App\Entities;

use CodeIgniter\Entity;

class DataAngket extends Entity
{
    public function setGambar($file)
    {   
        $gambar = $file->getRandomName();
        $writePath1 = './uploads';
        $file->move($writePath1, $gambar);
        $this->attributes['gambar'] = $gambar;
        return $this;
    }
}
