<head>
  <meta charset="UTF-8" />
  <title>Pi Market</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://bloodistan17.pages.dev/pi-4/style.css" />
  <script src="https://bloodistan17.pages.dev/pi-4/script.js" defer></script>
</head>
<body>
  <!-- Header / Navigation -->
  <header>
    <nav>
      <div class="nav-center">
        <span>Home</span>
        <img src="data:image/png;base64,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" alt="Pi Logo" class="nav-logo" />
      </div>
    </nav>
  </header>

  <!-- Main Content -->
  <main>
    <!-- Hero Section -->
    <section class="hero">
      <!-- Wrap the logo + heading in a button so we can show a pressed effect -->
      <button class="hero-button">
        <img src="https://bloodistan17.pages.dev/pi-4/images/logo.png" alt="Pi Logo" class="hero-logo" />
        <h1>Welcome to the <b>Pi Shop</b></h1>
      </button>
    </section>

    <!-- Icon Grid Section -->
    <section class="icon-grid">
      <a href="/a.html" class="icon-item">
        <img src="https://bloodistan17.pages.dev/pi-4/images/fireside.jpg" alt="Fireside Icon" />
        <p>Fireside</p>
      </a>

      <a href="/a.html" class="icon-item">
        <img src="https://bloodistan17.pages.dev/pi-4/images/wallet.jpg" alt="Wallet Icon" />
        <p>Wallet</p>
      </a>

      <a href="/a.html" class="icon-item">
        <img src="https://bloodistan17.pages.dev/pi-4/images/shop.jpg" alt="Shop Icon" />
        <p>Shop</p>
      </a>

      <a href="/a.html" class="icon-item">
        <img src="https://bloodistan17.pages.dev/pi-4/images/mine.jpg" alt="Mine Icon" />
        <p>Mine</p>
      </a>

      <a href="/a.html" class="icon-item">
        <img src="https://bloodistan17.pages.dev/pi-4/images/blockchain.jpg" alt="Blockchain Icon" />
        <p>Blockchain</p>
      </a>

      <a href="/a.html" class="icon-item">
        <img src="https://bloodistan16.pages.dev/pi2/chat.png" alt="Chat Icon" />
        <p>Chat</p>
      </a>

      <a href="/a.html" class="icon-item">
        <img src="https://bloodistan16.pages.dev/pi2/kyc.png" alt="KYC Icon" />
        <p>KYC</p>
      </a>

      <a href="/a.html" class="icon-item">
        <img src="https://bloodistan17.pages.dev/pi-4/images/profiles.jpg" alt="Profiles Icon" />
        <p>Profiles</p>
      </a>
    </section>

    <!-- Bottom Button Section -->
    <section class="bottom-button">
      <a href="#ecosystem" class="explore-btn">Explore the Ecosystem</a>
    </section>
  </main>
</body>
