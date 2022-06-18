<?php
$oneSizeItem = function ($oneSize){
    if ($oneSize > 0) {
        return "hidden";
    }
};

$availabilitySize = function ($size){
    if ($size == 0) {
        return "disabled";
    }
};

$availabilityItem = function ($summa){
    if ($summa == 0) {
        return 'disabled type="button" value="Sold Out" class="buttonBuy button soldOut"';
    }else{
        return 'type="button" value="To cart" class="buttonBuy button"';
    }
};

$disableSelect = function ($summa){
    if ($summa == 0) {
        return 'hidden';
    }
};

$oneSize = function ($size){
    if ($size == null){
        return 'One size';
    }
};

$soldOut = function ($summa){
    if($summa == 0){
        return '<div class="badge badgeSoldOut"><span>SOLD OUT</span></div>';
    }
};

$soldOutClass = function ($summa){
    if($summa == 0){
        return 'class="imageSoldOut"';
    }
};
?>