<?php

namespace App;
use cebe\markdown\Markdown as Markdown;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public function parse()
  {
    $parser = new Markdown();
    return $parser->parse($this->body);
  }

  public function getMarkBodyAttribute()
  {
    return $this->parse();
  }
}
