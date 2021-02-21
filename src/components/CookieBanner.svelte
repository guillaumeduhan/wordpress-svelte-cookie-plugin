<script>
  import Cookies from 'js-cookie';

  // emit an event
  import { createEventDispatcher } from 'svelte';
  const dispatch = createEventDispatcher();

  function hideBanner() {
    dispatch('hideThisBanner');
  }

  function acceptCookies() {
    Cookies.set('myCookieFromSvelteApp', true);
    hideBanner();
  }
  function declineCookies() {
    Cookies.set('declineCookies', true);
    hideBanner();
  }
</script>

<div
  class="CookieBanner container fixed-bottom"
>
  <div
    class="alert alert-light border alert-dismissible fade show"
    role="alert"
  >
    <div class="row justify-content-between align-items-stretch">
      <div
        class="col-1 h-full d-flex align-items-center justify-content-center"
      >
        <img src="wp-content/plugins/cookie-plugin/assets/cookie.png" alt="" />
      </div>
      <div class="col-8">
        <p class="m-0 fw-bolder">Are you okay with Cookies?</p>
        <p class="lh-base fs-6 m-0">
          Cookies let us give you a better experience and improve our products.<br
          />We won't turn them until you accept.
        </p>
      </div>
      <div class="col-2">
        <div class="row">
          <button
            id="accept"
            type="button"
            class="btn btn-info text-white mb-2"
            on:click={acceptCookies}>Accept</button
          >
          <button
            id="decline"
            type="button"
            class="btn btn-outline-info"
            on:click={declineCookies}>Decline</button
          >
        </div>
      </div>
    </div>
  </div>
</div>
