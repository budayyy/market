<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper pt-2">
  
  <!-- Main content -->
  <div class="content" >
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-lg-4">
          <!-- DIRECT CHAT -->
          <div class="card direct-chat direct-chat-primary" style="height: 100%">
              <div class="card-header">
                <h3 class="card-title">Message</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages" style="height: 30rem">
                  <ul class="contacts-list" id="obrolan">

                  </ul>
                </div>
                <!--/.direct-chat-messages-->
              </div>
              <!-- /.card-body -->
            </div>
            <!--/.direct-chat -->
        </div>
        <div class="col-lg-8">
           <!-- DIRECT CHAT -->
           <div class="card direct-chat direct-chat-primary" style="height: 100%">
              <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages" style="height: 28rem">
                  <div id="roomchat">

                  </div>
                </div>
                <!--/.direct-chat-messages-->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <div class="input-group">
                    <input type="text" id="pesan" placeholder="Ketikan Sesuatu...." class="form-control" autocomplete="off">
                    <span class="input-group-append">
                      <button type="button" onclick="kirim()" class="btn btn-primary"><i class="fas fa-share"></i></button>
                    </span>
                  </div>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
        </div>
      </div>
    </div>
  </div>





</div>