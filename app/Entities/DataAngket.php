<?php

namespace App\Entities;

use CodeIgniter\Entity;

class DataAngket extends Entity
{
    public function setGambar($file, $resume)
    {   
        $gambar = $file->getRandomName();
        $cv = $resume->getRandomName();
        
        $writePath1 = './uploads';
        $writePath = './cv';

        $file->move($writePath1, $gambar);
        $resume->move($writePath, $cv);
        
        $this->attributes['gambar'] = $gambar;
        $this->attributes['cv'] = $cv;
        return $this;
    }
}
