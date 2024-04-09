<figure class="max-w-lg">
  <img id="dogImage" class="h-auto max-w-full rounded-lg" src="" alt="Random Dog Image">
  <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Image caption</figcaption>
</figure>

<script>
  // Fetch a random dog image from Dog CEO's Dog API
  fetch('https://dog.ceo/api/breeds/image/random')
    .then(response => response.json())
    .then(data => {
      const imageUrl = data.message;
      document.getElementById('dogImage').src = imageUrl;
    })
    .catch(error => console.error('Error fetching random dog image:', error));
</script>
