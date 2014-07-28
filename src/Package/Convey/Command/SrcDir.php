<?php

namespace Pickle\Package\Convey\Command;

use Composer\Config;

use Pickle\Package;
use Pickle\Package\Convey\Command;


class SrcDir extends AbstractCommand implements Command\Command
{
    protected function prepare()
    {
        $this->url = $this->path;
    }

    public function execute($target, $no_convert)
    {
        return parent::execute($target, $no_convert);
    }

    public function getType()
    {
        return Command\Type::SRC_DIR;
    }
}
