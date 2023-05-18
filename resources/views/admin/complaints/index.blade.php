@extends('admin.layout')
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">complaints</h5>

      <div class="accordion accordion-flush" id="faq-group-2">
           @foreach($complaints as $item )
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse">
           {{$item->complaintname}}
            </button>
          </h2>
          <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
            <div class="accordion-body">
              {{$item->complaintdetails}}
             <div class="d-flex justify-content-between">
  
                <h6 class="mt-2">By Eliod</h6>
                <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#basicModal">
                  Reply
                </button>
                {{-- model details to reply --}}
                <div class="modal fade" id="basicModal" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Reply to Eliod</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form action="{{url('replying')}}" method="post">
                        @csrf
                      <textarea name="responses" id="" class="w-100" rows="10" placeholder="Type here the reply"></textarea>
                      </div>
                      <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> --}}
                        <button type="submit" class="btn btn-primary">Send</button>
                      </div>
                    </form>

                    </div>
                  </div>
                </div>
             </div>
          </div>
        </div>
           
        @endforeach

        {{-- <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2" type="button" data-bs-toggle="collapse">
              Provident beatae eveniet placeat est aperiam repellat adipisci?
            </button>
          </h2>
          <div id="faqsTwo-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
            <div class="accordion-body">
              In minus quia impedit est quas deserunt deserunt et. Nulla non quo dolores minima fugiat aut saepe aut inventore. Qui nesciunt odio officia beatae iusto sed voluptatem possimus quas. Officia vitae sit voluptatem nostrum a.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-target="#faqsTwo-3" type="button" data-bs-toggle="collapse">
              Minus aliquam modi id reprehenderit nihil?
            </button>
          </h2>
          <div id="faqsTwo-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
            <div class="accordion-body">
              Voluptates magni amet enim perspiciatis atque excepturi itaque est. Sit beatae animi incidunt eum repellat sequi ea saepe inventore. Id et vel et et. Nesciunt itaque corrupti quia ducimus. Consequatur maiores voluptatum fuga quod ut non fuga.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-target="#faqsTwo-4" type="button" data-bs-toggle="collapse">
              Quaerat qui est iusto asperiores qui est reiciendis eos et?
            </button>
          </h2>
          <div id="faqsTwo-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
            <div class="accordion-body">
              Numquam ut reiciendis aliquid. Quia veritatis quasi ipsam sed quo ut eligendi et non. Doloremque sed voluptatem at in voluptas aliquid dolorum.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
              Laboriosam asperiores eum?
            </button>
          </h2>
          <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
            <div class="accordion-body">
              Aut necessitatibus maxime quis dolor et. Nihil laboriosam molestiae qui molestias placeat corrupti non quo accusamus. Nemo qui quis harum enim sed. Aliquam molestias pariatur delectus voluptas quidem qui rerum id quisquam. Perspiciatis voluptatem voluptatem eos. Vel aut minus labore at rerum eos.
            </div>
          </div>
        </div> --}}

      </div>

    </div>
  </div>


@endsection