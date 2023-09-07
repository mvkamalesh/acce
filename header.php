<div class="ant-row">
  <div class="w-100 pos-fixed" style="top:0;z-index:1200">
    <div class="ant-row-flex ant-row-flex-start ant-row-flex-middle pl-md-6 pl-2 bg-primary h-5">
      <span class="c-white font-xsmall fw-600">For Support:</span>
      <img src="images/phone.svg" class="mw-20 pr-1 pl-2" />
      <span class=" c-white font-xsmall" style="opacity:0.8">
        <a href="tel:18004199233" class="c-white">+1 972-918-5231</a>
      </span>
      <a href="mailto:info@accecore.com" target="_blank">
        <img src="images/email.svg" class="mw-20 pr-1 pl-2" />
        <span class=" c-white font-xsmall" style="opacity:0.8">info@accecore.com</span>
      </a>
    </div>
    <div class="ant-row-flex ant-row-flex-space-between ant-row-flex-middle bg-secondary py-2 px-md-6 px-2">
      <a aria-current="page" class="" href="/accecore">
        <img src="images/ip_logo.svg" height="50" />
      </a>
      <div class="d-flex d-lg-none">
        <div></div>
        <button type="button" class="ant-btn c-white ant-btn-link ant-btn-circle ant-btn-icon-only">
          <i aria-label="icon: menu" class="anticon anticon-menu">
            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="menu" width="1em" height="1em" fill="currentColor" aria-hidden="true">
              <path d="M904 160H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0 624H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0-312H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8z"></path>
            </svg>
          </i>
        </button>
      </div>
      <div class="ant-row-flex ant-row-flex-end ant-row-flex-middle d-lg-flex d-none">
        <div class="ant-row-flex ant-row-flex-middle">
          <a href="aboutus" <?php if (isset($currentPage) && $currentPage == "About Us") echo 'id="currentpage"'; ?> class="ant-dropdown-link px-4 ant-dropdown-trigger">
            <span class="c-black font-normal pr-1">About Us</span>
          </a>
          <a href="/accecore/#solutions" <?php if (isset($currentPage) && $currentPage == "solutions") echo 'id="currentpage"'; ?> class="ant-dropdown-link px-4 ant-dropdown-trigger">
            <span class="solutionslink c-black font-normal pr-1">Solutions</span>
          </a>
          <a href="customers" <?php if (isset($currentPage) && $currentPage == "customers") echo 'id="currentpage"'; ?> class="ant-dropdown-link px-4 ant-dropdown-trigger">
            <span class="c-black font-normal pr-1">Customers</span>
          <a href="careers" <?php if (isset($currentPage) && $currentPage == "careers") echo 'id="currentpage"'; ?> class="ant-dropdown-link px-4 ant-dropdown-trigger">
            <span class="c-black font-normal pr-1">Careers</span>
          </a>
          <button type="button" class="ant-btn pr-4">
            <a href="#" target="_blank">Events</a>
          </button>
          <button type="button" class="ant-btn  mx-4">
            <a href="#" target="_blank">Contact Us</a>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>