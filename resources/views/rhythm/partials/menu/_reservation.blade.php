<!-- Reservation Section -->
<section class="page-section" id="reservations">
    <div class="container relative">

        <h2 class="section-title font-alt mb-70 mb-sm-40">
            Reservations
        </h2>


        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-text align-center mb-70 mb-xs-40">
                    Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus.
                    In&nbsp;auctor ex&nbsp;id&nbsp;urna faucibus porttitor. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. In&nbsp;maximus ligula semper metus pellentesque mattis.
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">

                <form class="form contact-form" id="contact_form">
                    <div class="clearfix">

                        <!-- Name -->
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Name *" pattern=".{3,100}" required>
                        </div>

                        <!-- Phone -->
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="input-md round form-control" placeholder="Phone *" pattern=".{3,100}" required>
                        </div>

                        <div class="clearfix">

                            <div class="cf-left-col">

                                <!-- Date -->
                                <div class="form-group">
                                    <input type="text" name="date" id="date" class="input-md round form-control" placeholder="Date" pattern=".{3,100}">
                                </div>

                            </div>

                            <div class="cf-right-col">

                                <!-- Time -->
                                <div class="form-group">
                                    <input type="text" name="time" id="time" class="input-md round form-control" placeholder="Time" pattern=".{3,100}">
                                </div>

                            </div>

                        </div>

                        <!-- Message -->
                        <div class="form-group">
                            <textarea name="message" id="message" class="input-md round form-control" style="height: 150px;" placeholder="Message"></textarea>
                        </div>
                    </div>

                    <div class="clearfix">

                        <div class="cf-left-col">
                            <!-- Inform Tip -->
                            <div class="form-tip pt-20">
                                * &mdash; these fields are required
                            </div>
                        </div>

                        <div class="cf-right-col">
                            <!-- Send Button -->
                            <div class="align-right pt-10">
                                <button class="submit_btn btn btn-mod btn-medium btn-round" id="submit_btn">Reserve table</button>
                            </div>
                        </div>

                    </div>

                    <div id="result"></div>

                </form>

            </div>

        </div>

    </div>
</section>
<!-- End Reservation Section -->