<?php

namespace App\Services;

class Parser
{
    private string $file_name;
    private array  $data    = [];
    private array  $columns = [];

    public function __construct(string $file_name)
    {
        $this->file_name = $file_name;
    }

    private function parse(): void
    {
        $file = fopen(storage_path("app/" . $this->file_name), "r");
        $index = 0;

        while(!feof($file))
        {
            $line = fgetcsv($file);
            if(!$line)
                break;

            if($index == 0)
            {
                $this->columns = $line;
            }
            else
            {
                $this->data[] = array_combine($this->columns, $line);
            }
            $index++;
        }
    }

    public function toArray(): array
    {
        $this->parse();

        return $this->data;
    }
}
