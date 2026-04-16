<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $data->title ?? 'Landing Page' }}</title>

  ```
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  ```

</head>

<body>

  <!-- 🔹 Navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">MyWebsite</a>
    </div>
  </nav>

  <!-- 🔹 Hero Section -->

  <section class="py-5 bg-primary text-white text-center">
    <div class="container">
      <h1 class="display-4">{{ $data->title }}</h1>
      <p class="lead">{{ $data->description }}</p>

      ```
      @if($data->hero_image)
      <img src="{{ asset('storage/' . $data->hero_image) }}"
        class="img-fluid mt-4 rounded shadow"
        style="max-height: 400px;">
      @endif

      <div class="mt-4">
        <a href="#" class="btn btn-light btn-lg">Get Started</a>
      </div>
    </div>
    ```

  </section>

  <!-- 🔹 Features -->

  <section class="py-5">
    <div class="container text-center">
      <h2 class="mb-4">Features</h2>
      <div class="row">
        <div class="col-md-4">
          <h5>Fast</h5>
          <p>Website cepat dan ringan.</p>
        </div>
        <div class="col-md-4">
          <h5>Modern</h5>
          <p>Desain kekinian.</p>
        </div>
        <div class="col-md-4">
          <h5>Easy</h5>
          <p>Mudah digunakan.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 🔹 Footer -->

  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">© {{ date('Y') }} MyWebsite</p>
  </footer>

</body>

</html>