<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Registration - 36th Weekend Course on Cardiology')]
class Registration extends Component
{
    public $produks;

    public function mount()
    {
        $this->produks = $this->getProduk();
    }

    private function getProduk()
    {
        $connection = new \mysqli('103.31.251.67', 'faizal2', '0K9FwdpDIhnIVpVLrxKftIckenMIFZ', 'wecoc2024');

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        $result = $connection->query("SELECT * FROM produk");
        $data = $result->fetch_all(MYSQLI_ASSOC);

        $connection->close();
        return $data;
    }
    public function render()
    {
        return view('livewire.pages.registration', ['produks' => $this->produks]);
    }
}
