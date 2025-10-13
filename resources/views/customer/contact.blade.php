@include('customer.layouts.head')

@include('customer.layouts.navbar')
@section('title', 'Contact Us')

<div class="container py-5">

    {{-- Page Header --}}
    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color: orange;">Contact Us</h2>
        <p class="text-muted">We'd love to hear from you! Fill out the form below.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header" style="background-color: orange; color: white;">
                    <h5 class="mb-0">Send a Message</h5>
                </div>

                <div class="card-body">

                    {{-- Contact Form --}}
                    <form  >
                        @csrf

                        {{-- Name --}}
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        {{-- Subject --}}
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control">
                        </div>

                        {{-- Message --}}
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea name="message" rows="5" class="form-control" required></textarea>
                        </div>

                        {{-- Submit button --}}
                        <div class="text-end">
                            <button type="submit" class="btn" style="background-color: orange; color: white;">
                                Send Message
                            </button>
                        </div>

                    </form>

                </div>
            </div>

            {{-- Contact Info --}}
            <div class="mt-4 text-center">
                <p><strong>Phone:</strong> +123 456 7890</p>
                <p><strong>Email:</strong> support@example.com</p>
                <p><strong>Address:</strong> 123 Orange Street, Cairo, Egypt</p>
            </div>

        </div>
    </div>
</div>
@include('customer.layouts.footer')
