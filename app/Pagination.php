<?php

namespace App;

use Illuminate\Pagination\BootstrapThreePresenter;
use Illuminate\Support\HtmlString;

class CustomPagination extends BootstrapThreePresenter
{

    public function render()
    {
        if ($this->hasPages()) {
            return new HtmlString(sprintf(
                '<ul class="pagination pagination-sm no-margin pull-right">%s %s %s</ul>',
                $this->getPreviousButton(),
                $this->getLinks(),
                $this->getNextButton()
            ));
        }

        return '';
    }

}
