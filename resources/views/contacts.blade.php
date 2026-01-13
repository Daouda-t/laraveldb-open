<x-layout>

    <div class="container-fluid movies">
        <div class="row h-100 justify-content-around align-items-center">
            <div class="col-12 h-25 justify-content-center align-items-center">
                <h2 class="text-white text-color display-5 text-center">contattci</h2>
            </div>
            <div
                class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center text-white">
                <div class="row">
                    <div class="col-12">
                        <i class="icon bi bi-whatsapp"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>scrivici su whatsapp</p>
                    </div>
                </div>

            </div>
            <div
                class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center text-white">
                <div class="row">
                    <div class="col-12">
                        <i class="icon bi bi-instagram"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>seguici su instagram</p>
                    </div>
                </div>

            </div>
            <div
                class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center text-white">
                <div class="row">
                    <div class="col-12">
                        <i class="icon bi bi-facebook"></i>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <p>seguici su facebook</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row h-100 justify-content-center aligh-items-center">
            <h2 class="text-white display-4 text-center text-color">...o sciviciuna mail</h2>
            <div class="col-12 col-md-8 text-white text-color">
                <form method="post" action="{{route('contactUs')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="user" class="form-label">inserici la tua nome</label>
                        <input type="text" name="user" class="form-control" id="user" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">inserici la tua mail</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">scrivi qui il tuo messaggio</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>