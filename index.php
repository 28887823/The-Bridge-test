<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>

    <script src="js/bootstrap.min.js"></script>
    <style>
      span {
        color: #fbb248;
      }
      h6 {
        color: #ac2258;
      }
      li a {
        font-size: 18px;
      }
    </style>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-light navbar-expand-md bg-light">
        <div class="container">
          <a href="index.html" class="navbar-brand"
            ><img src="images/logo.png" alt="logo"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#respo"
            aria-controls="respo"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse" id="respo">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" style="color: #fbb248" href="index.html"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a href="Formations.php" class="nav-link text-dark">Events</a>
              </li>
              <li class="nav-item">
                <a href="Sessions.php" class="nav-link text-dark">About us</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link text-dark">Contact us</a>
              </li>
              <li class="nav-item">
                <a
                  href="#"
                  class="ml-3 nav-link btn text-white col-3 col-md-12"
                  style="background-color: #ac2258; border-radius: 20px"
                  >Contact us</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section style="background-color: #f4ecef">
      <div class="container">
        <div class="row align-items-center justify-content-center py-5">
          <div class="col-lg-6 text-center text-lg-left mb-4 mb-lg-0">
            <h1>
              <b
                >Improve your <span>Skills</span> <br />on your own to <br />
                prepare for <br />
                <span>a better future</span></b
              >
            </h1>
            <a
              href="#"
              class="ml-3 mt-3 btn text-white"
              style="background-color: #ac2258; border-radius: 30px"
              >Register Now</a
            >
          </div>
          <div class="col-lg-6 text-center">
            <img src="images/header.png" alt="img" class="img-fluid w-75" />
          </div>
        </div>
      </div>
    </section>

    <section style="background-color: #f4ecef">
      <div class="container">
        <div class="row p-5">
          <div class="col-lg-12 row ml-4">
            <div class="col-9">
              <h2 class="mb-4">Discover Our courses</h2>
            </div>
            <div class="col-3">
              <a
                href="#"
                class="btn text-white"
                style="background-color: #ac2258; border-radius: 30px"
                >View More</a
              >
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="text-center">
              <img src="images/1.png" alt="Service 1" class="img-fluid" />
              <h3>Spring Boot / Angular</h3>
              <h6>350 DT / Month</h6>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="text-center">
              <img src="images/2.png" alt="Service 2" class="img-fluid" />
              <h3>Node.js / React</h3>
              <h6>350 DT / Month</h6>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="text-center">
              <img src="images/3.png" alt="Service 3" class="img-fluid" />
              <h3>Flutter / Firebase</h3>
              <h6>350 DT / Month</h6>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="text-center">
              <img src="images/4.png" alt="Service 4" class="img-fluid" />
              <h3>Business Intelligence</h3>
              <h6>350 DT / Month</h6>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="text-center">
              <img src="images/5.png" alt="Service 5" class="img-fluid" />
              <h3>Artifical Intelligence</h3>
              <h6>350 DT / Month</h6>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="text-center">
              <img src="images/6.png" alt="Service 6" class="img-fluid" />
              <h3>Devops</h3>
              <h6>350 DT / Month</h6>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section style="background-color: #fbb248">
      <div class="container">
          <div class="row py-5">
              <div class="col-lg-12 text-center">
                  <h2>Contact Us</h2>
              </div>
              <div class="col-lg-6 offset-lg-3">
                  <form action="contact.php" method="post"> 
                      <div class="form-group">
                          <label for="name">Name:</label>
                          <input
                              type="text"
                              class="form-control"
                              id="name"
                              name="name"
                              placeholder="Enter your name"
                              required
                          />
                      </div>
                      <div class="form-group">
                          <label for="email">Email:</label>
                          <input
                              type="email"
                              class="form-control"
                              id="email"
                              name="email"
                              placeholder="Enter your email"
                              required
                          />
                      </div>
                      <div class="form-group">
                          <label for="message">Message:</label>
                          <textarea
                              class="form-control"
                              id="message"
                              name="message"
                              rows="5"
                              placeholder="Enter your message"
                              required
                          ></textarea>
                      </div>
                      <button
                          type="submit"
                          class="btn text-white"
                          style="background-color: #ac2258"
                      >
                          Submit
                      </button>
                  </form>
              </div>
          </div>
      </div>
  </section>
  
  </body>
</html>
