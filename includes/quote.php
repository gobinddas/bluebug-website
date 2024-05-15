    <div class="quote">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form class="form " action="https://formsubmit.co/<?php echo $email; ?>" method="post">
                        <div class="title">
                            <h4>Quote Estimation</h4>
                        </div>
                        <div class="form-group">
                            <label class="label">Name</label>
                            <input class="form-control" name="Name" type="text">
                        </div>
                        <div class="form-group">
                            <label class="label">Email</label>
                            <input class="form-control" name="Email" type="text">
                        </div>
                        <div class="form-group">
                            <label class="label">Phone Number</label>
                            <input class="form-control" name="Phone" type="text">
                        </div>
                        <div class="form-group">
                            <label class="label">Address</label>
                            <input class="form-control" name="Address" type="text">
                        </div>
                        <div class="select-bar">
                            <label class="label">Type of services</label>
                            <input class="form-control" name="services" type="text">

                        </div>
                        <div class="form-group">
                            <label class="label">Message</label>
                            <textarea class="form-control message" rows="5" name="Message"></textarea>
                        </div>
                        <button class="quote-submission">Submit</button>

                        <input type="text" name="_honey" style="display:none">
                        <input type="hidden" name="_template" value="table">
                        <input type="hidden" name="_next" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>