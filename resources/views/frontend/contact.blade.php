@extends('layouts.user_type.guest')

@section('page_title', __('Contact'))
@section('front-header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<style>
  /* Button styles for a more professional look */
  .btn-primary {
    background-color: #0D9488;
    /* Teal-700 */
    color: white;
    padding: 0.75rem 2rem;
    border-radius: 0.5rem;
    /* Slightly less rounded */
    font-weight: 600;
    transition: background-color 0.3s ease, transform 0.2s ease;
  }

  .btn-primary:hover {
    background-color: #0F766E;
    /* Teal-800 */
    transform: translateY(-2px);
  }

  /* Custom styles for mobile menu toggle */
  .mobile-menu-button {
    display: none;
    /* Hidden by default */
    cursor: pointer;
    font-size: 2rem;
    color: white;
  }

  /* Show button on small screens */
  @media (max-width: 767px) {

    /* Tailwind's 'md' breakpoint is 768px */
    .mobile-menu-button {
      display: block;
    }

    .nav-menu.active {
      display: flex;
      /* Show menu when active */
      flex-direction: column;
      /* Stack items vertically */
      width: 100%;
      text-align: center;
      margin-top: 1rem;
    }

    .nav-menu li {
      margin: 0.5rem 0;
    }
  }
</style>
@endsection
@section('content')
<main class="container py-12">

  <!-- Contact Us Section -->
  <section id="contact-content">
    <div class="bg-white rounded-2xl shadow-2xl p-8 mb-12">
      <h1 class="text-5xl font-extrabold text-center text-stone-900 mb-10 leading-tight">Get in Touch with Maa Dharitri Crafts</h1>

      <p class="text-xl text-gray-700 leading-loose text-center mb-12 max-w-3xl mx-auto">
        We'd love to hear from you! Whether you have a question about our products, want to collaborate, or simply wish to learn more about our mission, feel free to reach out.
      </p>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Contact Form -->
        <div>
          <h2 class="text-3xl font-bold text-stone-800 mb-6">Send Us a Message</h2>
          <form class="space-y-6" id="contact-form">
            @csrf
            <div>
              <label for="name" class="block text-gray-700 text-lg font-semibold mb-2">Your Name</label>
              <input type="text" id="name" name="name" class="shadow-sm appearance-none border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" placeholder="John Doe">
            </div>
            <div>
              <label for="email" class="block text-gray-700 text-lg font-semibold mb-2">Your Email</label>
              <input type="email" id="email" name="email" class="shadow-sm appearance-none border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" placeholder="john.doe@example.com">
            </div>
            <div>
              <label for="subject" class="block text-gray-700 text-lg font-semibold mb-2">Subject</label>
              <input type="text" id="subject" name="subject" class="shadow-sm appearance-none border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" placeholder="Inquiry about products / Collaboration etc.">
            </div>
            <div>
              <label for="message" class="block text-gray-700 text-lg font-semibold mb-2">Your Message</label>
              <textarea id="message" name="message" rows="7" class="shadow-sm appearance-none border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" placeholder="Type your message here..."></textarea>
            </div>
            <button type="submit" id="submit-btn" class="btn-primary w-full sm:w-auto">Send Message</button>
          </form>
        </div>

        <!-- Contact Details & Map -->
        <div>
          <h2 class="text-3xl font-bold text-stone-800 mb-6">Our Location & Details</h2>
          <div class="bg-stone-50 rounded-xl shadow-md p-8 mb-8 border-l-4 border-teal-600">
            <p class="text-gray-700 text-lg mb-3"><strong>Address:</strong>1299, GALI NO.- 38, D.D.A FLAT MADANGIR, NEW DELHI - 110062, INDIA</p>
            <p class="text-gray-700 text-lg mb-3"><strong>Phone:</strong> +91 9811808311</p>
            <p class="text-gray-700 text-lg mb-3"><strong>Email:</strong> maadharitriterracotta@gmail.com</p>
          </div>

          <h2 class="text-3xl font-bold text-stone-800 mb-6">Find Us on Map</h2>
          <div class="rounded-xl overflow-hidden shadow-xl border border-gray-200">
            <!-- Replace with your actual Google Maps embed code -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.7023998781374!2d77.22568002495255!3d28.518600189246353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce1900a6765b3%3A0xbaabc6c7bea85ce8!2sDDA%20Flats%2C%20Doctor%20Ambedkar%20Nagar%2C%20Madangir%2C%20New%20Delhi%2C%20Delhi%20110062!5e0!3m2!1sen!2sin!4v1753123740871!5m2!1sen!2sin" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection

@section('front-footer')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
   document.addEventListener('DOMContentLoaded', function() {
        // Get the form and button elements
        const form = document.getElementById('contact-form');
        const submitButton = document.getElementById('submit-btn');

        // Add a submit event listener to the form
        form.addEventListener('submit', function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Disable the button and show a loading state
            submitButton.disabled = true;
            submitButton.textContent = 'Sending...';

            // Create a FormData object from the form
            const formData = new FormData(form);

            // Send the form data using the Fetch API
            fetch('{{ route("contact.submit") }}', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': formData.get('_token')
                },
                body: formData
            })
            .then(response => {
                // Check if the response is ok before trying to parse JSON
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // If the response is successful
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: data.message,
                    });
                    form.reset(); // Clear the form
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: data.message,
                    });
                }
            })
            .catch(error => {
                // Handle any network or server errors
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'An unexpected error occurred. Please try again.',
                });
                console.error('Error:', error);
            })
            .finally(() => {
                // Re-enable the button and reset its text
                submitButton.disabled = false;
                submitButton.textContent = 'Send Message';
            });
        });
    });
</script>
@endsection