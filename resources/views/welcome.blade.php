<x-layout>
    <header>
        <div class="container-fluid header">
            @if (session()->has('emailSent'))
                <div class="alert alert-success pt-5">
                    {{ session('emailSent') }}
                </div>
            @endif
            @if (session()->has('emailError'))
                <div class="alert alert-danger pt-5">
                    {{ session('emailSent') }}
                </div>
            @endif
            @if (session()->has('successMessage'))
                <div class="alert alert-success pt-5">
                    {{  session('successMessage') }}
                </div>
            @endif
            <div class="row h-100">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <h1 class="text-light display.1 fw-bold text-color">open one</h1>
                </div>
            </div>
        </div>
    </header>

</x-layout>