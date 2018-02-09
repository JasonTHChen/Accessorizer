<div class="avatar">

    <img id="guy" src="assets/img/guy.png" alt="Avatar">

    <div id='overlay'>

        <!-- These are the items.
        TODO: give an ID to each for indentification -->
        <div id="all-items" class="items">
          <?php $count = -1; ?>
          <?php foreach ($accessories as $accessory): ?>
            <?php if ($count < $accessory->categoriesId): ?>
                <?php $count = $accessory->categoriesId; ?>
                <h2><?php echo $categories[$count]->name; ?></h2>
            <?php endif; ?>
            <div id="<?php echo $accessory->name; ?>" class="couponcode">
              <img class="draggable drag-drop <?php echo strtolower($categories[$accessory->categoriesId]->name); ?>" src="<?php echo $accessory->image; ?>"/>
                <div class="coupontooltip">
                  <p>Damage: <?php echo $accessory->damage; ?></p>
                  <p>Protection: <?php echo $accessory->protection; ?></p>
                  <p>Weight: <?php echo $accessory->weight; ?></p>
                </div>
            </div>
          <?php endforeach; ?>

        </div>

        <br />

        <!-- These are the slots for the items -->
        <div class="slots">
          <?php foreach ($categories as $category): ?>
            <div id="<?php echo strtolower($category->name); ?>" class="dropzone <?php echo strtolower($category->name); ?>">
              <?php echo $category->name ?>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="stats">
          <h3>Weight</h3>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
              <span class="sr-only">70% Complete</span>
            </div>
          </div>
          <h3>Damage</h3>
          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
              <span class="sr-only">70% Complete</span>
            </div>
          </div>
          <h3>Protection</h3>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
              <span class="sr-only">70% Complete</span>
            </div>
          </div>

          <form class="row" action="" method="POST">
              <input type="text" name="head" value="" hidden>
              <input type="text" name="chest" value="" hidden>
              <input type="text" name="weapon" value="" hidden>
              <input type="text" name="accessory" value="" hidden>
              <input id="set-name" class="form-control" type="text" name="set" placeholder="Enter Set Name">
              <input id="set-save" class="btn btn-success mx-auto" type="submit" name="submit" value="Save">
          </form>

        </div>

    </div>
</div>
