<ul class="nav nav-tabs row" id="my-clients-messages-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="all-messages-tab" data-toggle="tab" href="#all-messages" role="tab"
      aria-controls="all-messages" aria-selected="true">
      All Messages
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="client-messages-tab" data-toggle="tab" href="#client-messages" role="tab"
      aria-controls="client-messages" aria-selected="false">
      Client Messages
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="affiliate-messages-tab" data-toggle="tab" href="#affiliate-messages" role="tab"
      aria-controls="affiliate-messages" aria-selected="false">
      Affiliate Messages
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="team-member-messages-tab" data-toggle="tab" href="#team-member-messages" role="tab"
      aria-controls="team-member-messages" aria-selected="false">
      Team Member Messages
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="send-new-messages-tab" data-toggle="tab" href="#send-new-messages" role="tab"
      aria-controls="send-new-messages" aria-selected="false">
      Send New Messages
    </a>
  </li>
</ul>
<div class="tab-content" id="messages-nav-content">
  <div class="tab-pane fade show active" id="all-messages" role="tabpanel" aria-labelledby="all-messages-tab">
    <?php require 'messages/info-bar.php'?>
    <?php require 'messages/all-messages.php'?>
    <?php require 'messages/help-tip.php'?>
  </div>
  <div class="tab-pane fade" id="client-messages" role="tabpanel" aria-labelledby="client-messages-tab">
    <?php require 'messages/info-bar.php'?>
    <?php require 'messages/all-messages.php'?>
    <?php require 'messages/help-tip.php'?>
  </div>
  <div class="tab-pane fade" id="affiliate-messages" role="tabpanel" aria-labelledby="affiliate-messages-tab">
    <?php require 'messages/info-bar.php'?>
    <?php require 'messages/all-messages.php'?>
    <?php require 'messages/help-tip.php'?>
  </div>
  <div class="tab-pane fade" id="team-member-messages" role="tabpanel" aria-labelledby="team-member-messages-tab">
    <?php require 'messages/info-bar.php'?>
    <?php require 'messages/all-messages.php'?>
    <?php require 'messages/help-tip.php'?>
  </div>
  <div class="tab-pane fade" id="send-new-messages" role="tabpanel" aria-labelledby="send-new-messages-tab">
    <div class="card">
      <div class="card-body">
        <div class="card-title">
          <h5>Send New Message</h5>
          <?php require 'messages/info-bar.php'?>
        </div>
        <?php require 'messages/help-tip.php'?>
      </div>
    </div>
  </div>
</div>