<?php

namespace Guiller\Taggy;

use Guiller\Taggy\Models\Tag;

trait TaggableTrait
{
	public function tags()
	{
		return $this->morphToMany(Tag::class, 'taggable');
	}
}