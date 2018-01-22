<?php

namespace App\Http\Controllers;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ContentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Reference is https://symfony.com/doc/current/components/process.html
     * 
     * @return void
     */
    public function video($id)
    {
        if ($id == 2) {
            $command = 'echo 2';
        } else {
            $command = 'echo "other than 2"';
        }
        
        $process = new Process($command);
        $process->run();
        if( !$process->isSuccessful() ) {
            throw new ProcessFailedException($process);
        }
        return $process->getOutput();
    }

    /**
     * Reference is http://php.net/manual/en/function.exec.php
     * 
     * @return void
     */
    public function ebook($id)
    {
        if ($id == 3) {
            echo exec('baobab');
        } else {
            echo exec('echo other');
        }
        
    }
}
