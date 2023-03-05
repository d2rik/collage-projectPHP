<?php include './header.php' ?>
    <!--Hero-->
    <nav
      class="navbar navbar-expand-lg navbar-dark position-absolute w-100"
      style="background-color: rgba(0, 0, 0, 0.9)"
    >
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="./images/1logo.png" alt="" width="150px" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#bestselles">Best selles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#statistics">Statistics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"
                ><span class="fa fa-search"></span
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="bg-image">
      <div
        class="d-flex justify-content-center align-items-center h-100"
        style="background-color: rgba(0, 0, 0, 0.8)"
      >
        <div class="container text-white text-center" style="width: 500px">
          <h1
            class="display-4 text-orange"
            style="font-family: 'Brush Script MT', cursive"
          >
            Title here
          </h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae eius
            et iusto, cumque, quas repellat voluptatum reiciendis accusantium
            cupiditate molestias a magnam. Modi suscipit, provident eligendi
            dolores architecto officiis quam.
          </p>
          <a class="btn mt-3 bg-orange" href="#">Order Now</a>
        </div>
      </div>
    </div>

    <!--Hero-->
    <!--section 1-->
    <section class="container my-5" id="bestselles">
      <div class="d-flex align-items-center flex-column my-4">
        <h1>Best selles</h1>
        <p class="text-center">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cum
          modi repellendus commodi. Laborum, eos!
        </p>
      </div>

      <div class="d-flex flex-column flex-md-row">
        <div class="d-flex flex-column align-items-center mx-3">
          <img src="images/3.png" alt="" class="rounded-circle mb-2" />
          <h5>The Title</h5>
          <p class="text-center">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum,
            nemo!
          </p>
        </div>

        <div class="d-flex flex-column align-items-center">
          <img src="images/4.png" alt="" class="rounded-circle mb-2 mx-3" />
          <h5>The Title</h5>
          <p class="text-center">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum,
            nemo!
          </p>
        </div>

        <div class="d-flex flex-column align-items-center">
          <img src="images/5.png" alt="" class="rounded-circle mb-2 mx-3" />
          <h5>The Title</h5>
          <p class="text-center">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum,
            nemo!
          </p>
        </div>
      </div>
    </section>
    <!--section1-->
    <!--section2-->
    <section class="bg-dark py-1" >
      <div
        class="container d-flex flex-column flex-md-row justify-content-around align-items-center my-5"
      >
        <img class="rounded-circle" src="images/6.png" alt="" />
        <div class="text-white text-md-left rabbi-1 mt-md-0 mt-4">
          <h1 class="text-orange">Title here</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Reiciendis, neque obcaecati, quis velit nulla dolorum quae dolor rem
            beatae blanditiis accusamus nemo corporis! Qui delectus ducimus
            velit quia fuga. Maxime.
          </p>
          <a class="btn bg-orange" href="#">Order Now</a>
        </div>
      </div>
    </section>
    <!--section2-->
    <!--section3-->
    <section class="bg-dark text-white py-5" id="statistics">
      <div class="container text-center" style="max-width: 800px">
        <h1 class="text-orange">Statistics</h1>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum odio
          praesentium eligendi earum, rem beatae eaque? Molestiae accusantium ut
          blanditiis delectus et officia, fugiat illo dignissimos, nulla
          voluptates iste reiciendis?
        </p>
      </div>
      <div
        class="container mt-5 d-flex flex-column flex-md-row justify-content-between align-items-center"
      >
        <div class="st-card my-1 my-md-0">
          <h1 class="text-orange">123</h1>
          <span>Outlets</span>
        </div>
        <div class="st-card my-1 my-md-0">
          <h1 class="text-orange">100</h1>
          <span>Outlets</span>
        </div>
        <div class="st-card my-1 my-md-0">
          <h1 class="text-orange">456</h1>
          <span>Outlets</span>
        </div>
        <div class="st-card my-1 my-md-0">
          <h1 class="text-orange">909</h1>
          <span>Outlets</span>
        </div>
      </div>
    </section>
    <!--section3-->
    <!--section4-->
    <section class="py-5 bg-dark text-white">
      <div
        class="container d-flex flex-column flex-md-row justify-content-around align-items-center"
      >
        <div class="pb-5 pb-md-0 rabbi-1" style="max-width: 500px">
          <h1 class="text-orange">Title here</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
            cumque rem ipsum optio aut. Voluptatibus ea reprehenderit voluptates
            non odit!
          </p>
          <a class="btn bg-orange" href="">Order Now</a>
        </div>
        <img src="images/2.png" style="border-radius: 50%" alt="" />
      </div>
    </section>
    <!--section4-->

    <!--section 6-->
    <section class="section6 bg-orange-f py-4">
      <div class="subs m-auto">
        <div>
          <h1 class="text-center text-orange mb-3 " id="contact">Contact</h1>
          <form method="POST">
            <div class="col-12">
              <div class="container">
                <form class="contact" method="post">
                  <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" id="name" type="text" name="name" placeholder="Name">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="emailAddress">Email Address</label>
                    <input class="form-control" id="emailAddress" type="email" name="email" placeholder="Email Address">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="subject">Subject</label>
                    <input class="form-control" id="subject" type="text" name="subject" placeholder="Subject">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="message">Message</label>
                    <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem" name="message"></textarea>
                  </div>
                  <div class="d-grid">
                    <input class="btn bg-orange btn-lg" type="submit" name="submit">
                  </div>
                </form>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!--section 6-->
    <!--footer-->
    <footer class="py-5 bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center pe-5">
            <h1>Title here</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi,
              nihil excepturi. Doloribus quibusdam eum provident ex eos ad modi
              iste.
            </p>
            <div class="icon">
              <button><i class="fa fa-instagram"></i></button>
              <button><i class="fa fa-facebook"></i></button>
              <button><i class="fa fa-twitter"></i></button>
              <button><i class="fa fa-whatsapp"></i></button>
            </div>
          </div>
          <div class="col-md-2">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Home</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Features</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Pricing</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">FAQs</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">About</a>
              </li>
            </ul>
          </div>
          <div class="col-md-2">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Home</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Features</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Pricing</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">FAQs</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">About</a>
              </li>
            </ul>
          </div>
          <div class="col-md-2 my-md-0 my-2">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Pricing</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">FAQs</a>
              </li>
              <li class="nav-item mb-2">
                <a href="./display.php" class="nav-link p-0 text-muted">admin</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!--footer-->

    <!--Custom JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"></script>
  </body>
</html>
