<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Submitted Complaints') }}
        </h2>
    </x-slot>
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-10">

                    <div class="accordion accordion-flush" id="faqlist">

                        @forelse($complaints as $complaint)
                            <div class="well">
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                            <i class="bi bi-question-circle question-icon"></i>
                                            {{ $complaint->title }}
                                        </button>
                                    </h3>
                                    <div id="faq-content-1" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            {{ $complaint->description }}
                                        </div>
                                        <div class="accordion-body d-flex justify-content-between">
                                            <span>Requested By: <i>{{ Auth::user()->name }}</i></span>
                                            <nav id="navbar" class="navbar">
                                                <ul>
                                                    <li class="nav-list"><a
                                                            class="get-a-quote btn btn-primary btn-outline-light"
                                                            href="/edit">EDIT</a></li>
                                                    <li><a class="delete" href="/delete">DELETE</a></li>
                                                </ul>
                                            </nav>
                                        </div>

                                    </div>
                                </div><!-- # Faq item-->
                            </div>
                        @empty
                            <p style="color: rgb(17, 16, 16); text-align:center;"><i>Oooops! No complaints found
                                    yet.</i></p>
                        @endforelse

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

</x-app-layout>
