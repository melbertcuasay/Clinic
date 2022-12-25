@if($statusbook == '4')
<section class="book-form" id="book-form">
            <div class="heading">
                <span> GET IN TOUCH </span>
                <h1> Contact Us </h1>
            </div>

           
                <form action="{{ url('appointment') }}" method="POST">
                    @csrf

               <div class="inputBox">
                <span>Last Name</span>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
               </div>

               <div class="inputBox">
                <span>First Name</span>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
               </div>

               <div class="inputBox">
                <span>Email</span>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
               </div>

               <div class="inputBox">
                <span>Phone Number</span>
                <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
               </div>

               <div class="inputBox">
                <span>Date</span>
                <input type="date" name="date" class="form-control" required>
               </div>

               <div class="inputBox">
                <span>Time</span>
                <input type="time" name="time" class="form-control" required>
               </div>

               <div class="inputBox">
                <span>Message</span>
                <textarea name="message" placeholder="Message (optional)" rows="3"></textarea>
               </div>

               <input type="submit" name="sumbit" class="btn" value="Book Appointment">

                </form>
            </div>
          </section>
          
          @elseif($statusbook == '1')
            <section class="book-form" id="book-form">
           <h4 style="background-color: gray; text-align:center; font-size: 30px; font-weight:bold;">
           You are Already Book. Please Wait for the Confirmation
           </h4>
            </section>

            @elseif($statusbook == '2')
            <section class="book-form" id="book-form">
           <h4 style="background-color: green; text-align:center; font-size: 30px; font-weight:bold;">
           Your Book Appointment has Approved!
           </h4>
            </section>

            @elseif($statusbook == '3')
            <h4 style="background-color: red; text-align:center; font-size: 30px; font-weight:bold;">
           Your Book Appointment has Canceled! Try Again.
           </h4>
            <section class="book-form" id="book-form">
            <div class="heading">
                <span> GET IN TOUCH </span>
                <h1> Contact Us </h1>
            </div>

                <form action="{{ url('appointment') }}" method="POST">
                    @csrf

               <div class="inputBox">
                <span>Last Name</span>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
               </div>

               <div class="inputBox">
                <span>First Name</span>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
               </div>

               <div class="inputBox">
                <span>Email</span>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
               </div>

               <div class="inputBox">
                <span>Phone Number</span>
                <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
               </div>

               <div class="inputBox">
                <span>Date</span>
                <input type="date" name="date" class="form-control" required>
               </div>

               <div class="inputBox">
                <span>Time</span>
                <input type="time" name="time" class="form-control" required>
               </div>

               <div class="inputBox">
                <span>Message</span>
                <textarea name="message" placeholder="Message (optional)" rows="3"></textarea>
               </div>

               <input type="submit" name="sumbit" class="btn" value="Book Appointment">

                </form>
            </div>
          </section>
          @endif
