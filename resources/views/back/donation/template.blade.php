
   <div class="image-container"
       style="background-attachment: fixed;
                 height: 70vh;
                 background-size: cover;
                 background-image:linear-gradient(
                                180deg,
                                rgba(12, 11, 11, 0.916),
                                rgba(11, 10, 10, 0.779)
                            ),url('{{ asset($donation->background_image) }}')">
       <div class="container">
           <div class=" text row">
               <div class="col-md-3 donation-text"> {!! $donation->text1 !!} </div>
               <div class="col-md-6 image">
                   <img src="{{ $donation->image }}">
               </div>
               <div class="col-md-3 goal">
                   <div class="col-md-6">
                       {!! $donation->text3 !!}
                   </div>
               </div>
           </div>
       </div>
   </div>
