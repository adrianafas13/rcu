<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="public/js/app.js"></script>
    <title>prueba vuejs</title>
    
    </head>
    
<body>

  
    <div id="app">
    <example-component></example-component>
    <script src="{{ asset('js/app.js') }} "></script>
    </div>

    <div id="app2">
    <h1 class="font-bold text-2xl text-gray-900 ">Example Project</h1>
    <p class="mb-6">This is just a example text for my tutorial.</p>

    <button
      class="bg-blue-600 text-white px-4 py-2 text-sm uppercase tracking-wide font-bold rounded-lg"
      @click="exampleModalShowing = true"
    >
      Show Modal
    <script src="{{ asset('js/app.js') }} "></script>
    </button>
    <card-modal :showing="exampleModalShowing" @close="exampleModalShowing = false">
        <h2 class="text-xl font-bold text-gray-900">Example modal</h2>
        <p class="mb-6">This is example text passed through to the modal via a slot.</p>
        <button
        class="bg-blue-600 text-white px-4 py-2 text-sm uppercase tracking-wide font-bold rounded-lg"
        @click="exampleModalShowing = false"
        >
        Close
        </button>
    </card-modal>
</div>

</div>
</body>
</html>