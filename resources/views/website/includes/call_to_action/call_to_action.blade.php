<!-- ======= Call To Action Section ======= -->
<section id="call-to-action" class="call-to-action">
    <div class="container" data-aos="zoom-out">

      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h3>Call To Action</h3>
          <p> Your Feedback Matters!
            Click Here to Raise Your Complaint Now.</p>
            <a href="#exampleModal" data-mdb-toggle="modal" data-mdb-target="#exampleModal" class="cta-btn">
              + Compose
          </a>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Compose new complaint</h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    {{-- <div class="modal-body"> --}}
                      <form action="{{ route('sent.store') }}" method="POST" class="php-email-form">
                        {{ csrf_field() }}
                        <div class="form-group mt-3">
                            <div class="form-group">
                                <label for="complaintCategory">Select complaint category</label>
                                <select class="form-control" id="complaintCategory" name="complaintCategory">
                                    <option>Marks</option>
                                    <option>Registration</option>
                                    <option>Tuition</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="form-group">
                                <label for="course">Select Course</label>
                                <select class="form-control" id="course" name="course">
                                    <option>BSSE</option>
                                    <option>BIST</option>
                                    <option>CS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="description" id="description" rows="5" placeholder="Describe here your complaint" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                    
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>

    {{-- </div> --}}
  </section><!-- End Call To Action Section -->



  cta-btn