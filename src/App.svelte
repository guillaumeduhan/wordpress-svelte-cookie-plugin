<script>
  import CookieBanner from './components/CookieBanner.svelte';

  let isVisible = true;

  function turnVisibilityOff() {
    isVisible = false;
  }
</script>

<main>
  {#if isVisible}
    <CookieBanner on:hideThisBanner={turnVisibilityOff} />
  {/if}
</main>
