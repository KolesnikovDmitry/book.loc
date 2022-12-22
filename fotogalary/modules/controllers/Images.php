<?php
namespace controllers;

use models\Image;

class Images extends BaseController
{
  function list() {
      $total_number_photos = ['list'=> new Image()];
      $this->render('list', $total_number_photos);
  }
  function item(int $index) {
      $item = Image::get_image($index);
      $total_number_photos = ['item' => $item, 'site_title' => $item['desc']];
      $this->render('item', $total_number_photos);

  }
}