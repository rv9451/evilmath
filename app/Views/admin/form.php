 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        
                        <div class="bg-light rounded h-100 p-4">
                            
                            <h6 class="mb-4">Add Video Or Link </h6>
                            <form method="POST" action ="<?php echo base_url().'/admin/lecture';?>">
                                <div class="mb-3">
                                
                                    <label for="exampleInputEmail1" class="form-label">Link</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="link"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">
                                    </div>
                                    <div class="form">
                                    <label for="exampleInputEmail1" class="form-label">Category</label> 
                                <select class="form-select" name="category"
                                    aria-label="Floating label select example">
                                    <option value="0">Select Category</option>
                                    <option value="1">BSC</option>
                                    <option value="2">MSC</option>
                                    <option value="3">SSC</option>
                                    <!-- <option value="3">Three</option> -->
                                </select></div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="title">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">By Teacher</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="teacher">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Time</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="timer">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
              </div>
          </div>
</div>