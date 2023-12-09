<?php

class Category {
    protected $id;
    protected $title;
    protected $batchId;
    protected $isAvailable;

    public function __construct($cid, $ctitle, $cbatchId, $cisAvailable) {
        $this->id = $cid;
        $this->title = $ctitle;
        $this->batchId = $cbatchId;
        $this->isAvailable = $cisAvailable;
    }

    public function getCategory() {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'batchId' => $this->batchId,
            'isAvailable' => $this->isAvailable
        ];
    }
}
