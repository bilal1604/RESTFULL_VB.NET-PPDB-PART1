</div>
    <!-- modal for create form -->
    <div class="modal fade" id="createOrder" tabindex="-1" role="dialog" aria-labelledby="createOrderTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header pink-gradient" id="createOrderTitle">
                  <div class="col text-center">
                      <h5 class="mt-3">Create Task </h5>
                      <p>Set Reminder with your preferances</p>
                  </div>
                  <button type="button" class="close absolute" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="row justify-content-center">
                      <div class="col-md-10 mx-auto">
                          <div class="form-group row">
                              <div class="col-lg-12 col-md-12">
                                  <label>Task Name</label>
                                  <input type="text" class="form-control" placeholder="">
                              </div>
                          </div>
                          <div class="form-group row">
                              <div class="col-lg-12 col-md-12">
                                  <label>Description</label>
                                  <textarea class="form-control" placeholder="" id="linedemo"></textarea>
                              </div>
                          </div>
                          <div class="form-group row">
                              <div class=" col-md-6 col-lg-6">
                                  <label>Priority</label>
                                  <select class="form-control " data-live-search="true" tabindex="-1" aria-hidden="true">
                                      <option>High Priority</option>
                                      <option>Medium Priority</option>
                                      <option>Low Priority</option>
                                  </select>
                              </div>
                              <div class=" col-md-6 col-lg-6">
                                  <label>Repeat</label>
                                  <select class="form-control " data-live-search="true" tabindex="-1" aria-hidden="true">
                                      <option>One day</option>
                                      <option>Weekly</option>
                                      <option>Monthly</option>
                                      <option>Yearly</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group row">
                              <div class="col-lg-6 col-md-6">
                                  <label>Start Date</label>
                                  <input type="text" class="form-control datepicker" placeholder="">
                              </div>
                              <div class="col-lg-6 col-md-6">
                                  <label>End Date</label>
                                  <input type="text" class="form-control datepicker" placeholder="">
                              </div>
                          </div>

                          <br>
                          <div class="form-group row">
                              <div class="col-md-12">
                                  <label>Attachments</label>
                                  <br>
                                  <div class="custom-dropzone text-center align-items-center" id="my-dropzone">
                                      <div class="dz-default dz-message" data-dz-message>
                                          <h3 class="mb-0"><i class="material-icons">cloud_download</i></h3>
                                          <p>Drop here or click here to upload</p>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Create Task</button>
              </div>
          </div>
      </div>
    </div>
    <!-- modal for create form ends-->
    </div>
    <footer class="border-top" >
        <div class="row">
            <div class="col-12 col-sm-6">Copyright <b>Integrative Programming Technologi</b> 2022</div>
        </div>
    </footer>

 
</body>

</html>