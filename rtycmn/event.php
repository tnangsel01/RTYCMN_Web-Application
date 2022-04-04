<!DOCTYPE html>
<html lang="en">
<head>
    <title>Annual Activities</title>
</head>
<?php 
session_start();
include("header.php"); ?>
<div class="container mt-3 text-center">
  <h2>RTYC-MN Annual Events</h2>
  
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="btn" data-bs-toggle="collapse" href="#collapse1"><strong>TYC Fundraising Day</strong></a>
      </div>
      <div id="collapse1" class="collapse show" data-bs-parent="#accordion">
        <div class="card-body">
            3rd Day of Losar is TYC Fundraising Day. All our chapters are encouraged to organize fundraising events for TYC Centrex.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapse2">
            <strong>Tibetan National Uprising Day</strong>
      </a>
      </div>
      <div id="collapse2" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
            10 March is observed as Tibetan National Uprising Day by Tibetans all over the world. On march 10, 1959 Tibetans in Tibet revolted against the Chinese occupation of Tibet and thousands were killed by the Chinese army.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapse3">
            <strong>Panchen Lama Birthday</strong>
        </a>
      </div>
      <div id="collapse3" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
            25 April is Birth Anniversary of the 11th Panchen Lama.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapse4">
            <strong>Martyr's Day</strong>
        </a>
      </div>
      <div id="collapse4" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
            29 April is the death Anniversary of Pawo Thupten Ngodup who sacrificed his life self immolating for Tibet.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapse5">
            <strong>Panchen Lama Arrest Day</strong>
        </a>
      </div>
      <div id="collapse5" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
            17 May is the day Panchen Lama was arrested on arbitrary charges.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapse6">
            <strong>World Environment Day</strong>
        </a>
      </div>
      <div id="collapse6" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
            5 June is observed as World Environment Day.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapse7">
            <strong>Birthday of HH the 14th Dalai Lama</strong>
        </a>
      </div>
      <div id="collapse7" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
            6 July is the Birthday of His Holiness the 14th Dalai Lama.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapse8">
            <strong>Tibetan Democracy Day</strong>
        </a>
      </div>
      <div id="collapse8" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
            2 September is observed as Tibetan Democracy Day.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapse9">
            <strong>TYC Founding Day</strong>
        </a>
      </div>
      <div id="collapse9" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
            7 October 1970 TYC was formed. This day is observed as TYC Founding Day.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapse10">
            <strong>Human Rights Day</strong>
        </a>
      </div>
      <div id="collapse10" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
            10 December is Human Rights Day and also the commemoration of the conferment of the 1989 Nobel Peace Prize to HH the Dalai Lama
        </div>
      </div>
    </div>

    
    
  </div>
</div>

<?php include("footer.php"); ?>
</html>