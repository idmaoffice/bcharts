<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- <link rel="icon" href="images/bt-icon.png" type="image/x-icon"> -->
      <link rel="icon" href="images/favicon.png" type="image/x-icon">
      <title>Pair explorer</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style-item.css">
      <script src="js/jquery.min.js"></script>
      <script src="js/polyfills.js"></script>
      <script src="js/bundle.js"></script>
      <script src="js/iframe.js"></script>
      <script src="js/contentscript.js"></script>
      <script src="js/asyncToGenerator.js"></script>
   </head>
   <body class="d-body">
      <div class="d-wrapper">
         <div class="sidebar">
            <ul class="sidebar__list">
               <li>
                  <a href="#">
                  <img src="images/logo.svg" class="sidebar__logo" alt="logo">
                  <span>bcharts.io</span>
                  </a>
               </li>
               <li class="sidebar__active">
                  <a href="http://idma.su/dashboard/dashboard.html">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9">
                           <path d="M9.13478 20.7733V17.7156C9.13478 16.9351 9.77217 16.3023 10.5584 16.3023H13.4326C13.8102 16.3023 14.1723 16.4512 14.4393 16.7163C14.7063 16.9813 14.8563 17.3408 14.8563 17.7156V20.7733C14.8539 21.0978 14.9821 21.4099 15.2124 21.6402C15.4427 21.8705 15.7561 22 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0008C21.1356 20.3588 21.5 19.487 21.5 18.5778V9.86686C21.5 9.13246 21.1721 8.43584 20.6046 7.96467L13.934 2.67587C12.7737 1.74856 11.1111 1.7785 9.98539 2.74698L3.46701 7.96467C2.87274 8.42195 2.51755 9.12064 2.5 9.86686V18.5689C2.5 20.4639 4.04738 22 5.95617 22H7.87229C8.55123 22 9.103 21.4562 9.10792 20.7822L9.13478 20.7733Z" fill="white"/>
                        </g>
                     </svg>
                     <span>BSCboard</span>
                  </a>
               </li>
               <li>
                  <a href="http://idma.su/dashboard/pair-explorer.php">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.4274 2.5783C20.9274 2.0673 20.1874 1.8783 19.4974 2.0783L3.40742 6.7273C2.67942 6.9293 2.16342 7.5063 2.02442 8.2383C1.88242 8.9843 2.37842 9.9323 3.02642 10.3283L8.05742 13.4003C8.57342 13.7163 9.23942 13.6373 9.66642 13.2093L15.4274 7.4483C15.7174 7.1473 16.1974 7.1473 16.4874 7.4483C16.7774 7.7373 16.7774 8.2083 16.4874 8.5083L10.7164 14.2693C10.2884 14.6973 10.2084 15.3613 10.5234 15.8783L13.5974 20.9283C13.9574 21.5273 14.5774 21.8683 15.2574 21.8683C15.3374 21.8683 15.4274 21.8683 15.5074 21.8573C16.2874 21.7583 16.9074 21.2273 17.1374 20.4773L21.9074 4.5083C22.1174 3.8283 21.9274 3.0883 21.4274 2.5783" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.01049 16.8078C2.81849 16.8078 2.62649 16.7348 2.48049 16.5878C2.18749 16.2948 2.18749 15.8208 2.48049 15.5278L3.84549 14.1618C4.13849 13.8698 4.61349 13.8698 4.90649 14.1618C5.19849 14.4548 5.19849 14.9298 4.90649 15.2228L3.54049 16.5878C3.39449 16.7348 3.20249 16.8078 3.01049 16.8078ZM6.77169 18.0002C6.57969 18.0002 6.38769 17.9272 6.24169 17.7802C5.94869 17.4872 5.94869 17.0132 6.24169 16.7202L7.60669 15.3542C7.89969 15.0622 8.37469 15.0622 8.66769 15.3542C8.95969 15.6472 8.95969 16.1222 8.66769 16.4152L7.30169 17.7802C7.15569 17.9272 6.96369 18.0002 6.77169 18.0002ZM7.02539 21.5682C7.17139 21.7152 7.36339 21.7882 7.55539 21.7882C7.74739 21.7882 7.93939 21.7152 8.08539 21.5682L9.45139 20.2032C9.74339 19.9102 9.74339 19.4352 9.45139 19.1422C9.15839 18.8502 8.68339 18.8502 8.39039 19.1422L7.02539 20.5082C6.73239 20.8012 6.73239 21.2752 7.02539 21.5682Z" fill="white"/>
                     </svg>
                     <span>Pair Explorer</span>
                  </a>
               </li>
               <li class="not-active">
                  <a href="#">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9">
                           <path d="M8.79058 21.5C7.137 21.4991 5.54984 20.8492 4.37058 19.69C3.78457 19.1199 3.3175 18.4391 2.99644 17.6872C2.67538 16.9353 2.50671 16.1272 2.5002 15.3096C2.49369 14.492 2.64946 13.6813 2.95851 12.9244C3.26755 12.1674 3.72372 11.4794 4.30058 10.9L5.56058 9.61999C5.65371 9.52474 5.76494 9.44906 5.88772 9.39739C6.0105 9.34573 6.14237 9.31911 6.27558 9.31911C6.40879 9.31911 6.54066 9.34573 6.66345 9.39739C6.78623 9.44906 6.89745 9.52474 6.99058 9.61999C7.17683 9.80735 7.28138 10.0608 7.28138 10.325C7.28138 10.5892 7.17683 10.8426 6.99058 11.03L5.74058 12.29C5.34269 12.6817 5.0267 13.1487 4.81101 13.6638C4.59532 14.1788 4.48424 14.7316 4.48424 15.29C4.48424 15.8484 4.59532 16.4012 4.81101 16.9162C5.0267 17.4312 5.34269 17.8982 5.74058 18.29C6.53956 19.0803 7.61677 19.5256 8.74058 19.53C9.29976 19.5271 9.85281 19.4134 10.3677 19.1954C10.8827 18.9774 11.3493 18.6595 11.7406 18.26L13.0006 16.97C13.0937 16.8747 13.2049 16.7991 13.3277 16.7474C13.4505 16.6957 13.5824 16.6691 13.7156 16.6691C13.8488 16.6691 13.9807 16.6957 14.1034 16.7474C14.2262 16.7991 14.3375 16.8747 14.4306 16.97C14.6168 17.1573 14.7214 17.4108 14.7214 17.675C14.7214 17.9392 14.6168 18.1926 14.4306 18.38L13.1706 19.68C12.0169 20.8298 10.4593 21.483 8.83058 21.5H8.79058Z" fill="white"/>
                           <path d="M17.7206 14.69C17.4563 14.6942 17.201 14.5935 17.0106 14.41C16.8244 14.2226 16.7198 13.9692 16.7198 13.705C16.7198 13.4408 16.8244 13.1874 17.0106 13L18.2706 11.72C18.6685 11.3283 18.9845 10.8613 19.2002 10.3462C19.4159 9.83118 19.527 9.27838 19.527 8.72C19.527 8.16162 19.4159 7.60882 19.2002 7.09378C18.9845 6.57874 18.6685 6.11175 18.2706 5.72C17.4717 4.92968 16.3944 4.48443 15.2706 4.48C14.7115 4.48289 14.1584 4.59662 13.6435 4.81461C13.1285 5.0326 12.6619 5.35053 12.2706 5.75L10.9306 7.06C10.8388 7.15656 10.7287 7.23381 10.6066 7.2872C10.4846 7.34059 10.3531 7.36905 10.2198 7.37092C10.0866 7.37278 9.95438 7.34801 9.83087 7.29805C9.70737 7.24809 9.59509 7.17396 9.50063 7.08C9.31438 6.89264 9.20984 6.63919 9.20984 6.375C9.20984 6.11081 9.31438 5.85736 9.50063 5.67L10.7606 4.37C11.3363 3.78319 12.0222 3.3159 12.779 2.99499C13.5359 2.67407 14.3486 2.50586 15.1706 2.5C16.8242 2.50088 18.4114 3.15083 19.5906 4.31C20.1766 4.88012 20.6437 5.56085 20.9648 6.31276C21.2858 7.06468 21.4545 7.87282 21.461 8.69038C21.4675 9.50795 21.3118 10.3187 21.0027 11.0756C20.6937 11.8325 20.2375 12.5206 19.6606 13.1L18.4006 14.38C18.2225 14.5673 17.9788 14.6784 17.7206 14.69Z" fill="white"/>
                           <path d="M9.50049 15.5C9.36889 15.5008 9.23842 15.4755 9.11659 15.4258C8.99475 15.376 8.88393 15.3027 8.79049 15.21C8.60424 15.0226 8.4997 14.7692 8.4997 14.505C8.4997 14.2408 8.60424 13.9874 8.79049 13.8L13.7305 8.8C13.8236 8.70475 13.9348 8.62907 14.0576 8.5774C14.1804 8.52574 14.3123 8.49912 14.4455 8.49912C14.5787 8.49912 14.7106 8.52574 14.8334 8.5774C14.9561 8.62907 15.0674 8.70475 15.1605 8.8C15.3467 8.98736 15.4513 9.24081 15.4513 9.505C15.4513 9.76918 15.3467 10.0226 15.1605 10.21L10.2205 15.21C10.1259 15.3039 10.0134 15.3779 9.88978 15.4277C9.76613 15.4775 9.63378 15.5021 9.50049 15.5Z" fill="white"/>
                           <path d="M8.79058 21.5C7.137 21.4991 5.54984 20.8492 4.37058 19.69C3.78457 19.1199 3.3175 18.4391 2.99644 17.6872C2.67538 16.9353 2.50671 16.1272 2.5002 15.3096C2.49369 14.492 2.64946 13.6813 2.95851 12.9244C3.26755 12.1674 3.72372 11.4794 4.30058 10.9L5.56058 9.61999C5.65371 9.52474 5.76494 9.44906 5.88772 9.39739C6.0105 9.34573 6.14237 9.31911 6.27558 9.31911C6.40879 9.31911 6.54066 9.34573 6.66345 9.39739C6.78623 9.44906 6.89745 9.52474 6.99058 9.61999C7.17683 9.80735 7.28138 10.0608 7.28138 10.325C7.28138 10.5892 7.17683 10.8426 6.99058 11.03L5.74058 12.29C5.34269 12.6817 5.0267 13.1487 4.81101 13.6638C4.59532 14.1788 4.48424 14.7316 4.48424 15.29C4.48424 15.8484 4.59532 16.4012 4.81101 16.9162C5.0267 17.4312 5.34269 17.8982 5.74058 18.29C6.53956 19.0803 7.61677 19.5256 8.74058 19.53C9.29976 19.5271 9.85281 19.4134 10.3677 19.1954C10.8827 18.9774 11.3493 18.6595 11.7406 18.26L13.0006 16.97C13.0937 16.8747 13.2049 16.7991 13.3277 16.7474C13.4505 16.6957 13.5824 16.6691 13.7156 16.6691C13.8488 16.6691 13.9807 16.6957 14.1034 16.7474C14.2262 16.7991 14.3375 16.8747 14.4306 16.97C14.6168 17.1573 14.7214 17.4108 14.7214 17.675C14.7214 17.9392 14.6168 18.1926 14.4306 18.38L13.1706 19.68C12.0169 20.8298 10.4593 21.483 8.83058 21.5H8.79058Z" fill="white"/>
                           <path d="M17.7206 14.69C17.4563 14.6942 17.201 14.5935 17.0106 14.41C16.8244 14.2226 16.7198 13.9692 16.7198 13.705C16.7198 13.4408 16.8244 13.1874 17.0106 13L18.2706 11.72C18.6685 11.3283 18.9845 10.8613 19.2002 10.3462C19.4159 9.83118 19.527 9.27838 19.527 8.72C19.527 8.16162 19.4159 7.60882 19.2002 7.09378C18.9845 6.57874 18.6685 6.11175 18.2706 5.72C17.4717 4.92968 16.3944 4.48443 15.2706 4.48C14.7115 4.48289 14.1584 4.59662 13.6435 4.81461C13.1285 5.0326 12.6619 5.35053 12.2706 5.75L10.9306 7.06C10.8388 7.15656 10.7287 7.23381 10.6066 7.2872C10.4846 7.34059 10.3531 7.36905 10.2198 7.37092C10.0866 7.37278 9.95438 7.34801 9.83087 7.29805C9.70737 7.24809 9.59509 7.17396 9.50063 7.08C9.31438 6.89264 9.20984 6.63919 9.20984 6.375C9.20984 6.11081 9.31438 5.85736 9.50063 5.67L10.7606 4.37C11.3363 3.78319 12.0222 3.3159 12.779 2.99499C13.5359 2.67407 14.3486 2.50586 15.1706 2.5C16.8242 2.50088 18.4114 3.15083 19.5906 4.31C20.1766 4.88012 20.6437 5.56085 20.9648 6.31276C21.2858 7.06468 21.4545 7.87282 21.461 8.69038C21.4675 9.50795 21.3118 10.3187 21.0027 11.0756C20.6937 11.8325 20.2375 12.5206 19.6606 13.1L18.4006 14.38C18.2225 14.5673 17.9788 14.6784 17.7206 14.69Z" fill="white"/>
                           <path d="M9.50049 15.5C9.36889 15.5008 9.23842 15.4755 9.11659 15.4258C8.99475 15.376 8.88393 15.3027 8.79049 15.21C8.60424 15.0226 8.4997 14.7692 8.4997 14.505C8.4997 14.2408 8.60424 13.9874 8.79049 13.8L13.7305 8.8C13.8236 8.70475 13.9348 8.62907 14.0576 8.5774C14.1804 8.52574 14.3123 8.49912 14.4455 8.49912C14.5787 8.49912 14.7106 8.52574 14.8334 8.5774C14.9561 8.62907 15.0674 8.70475 15.1605 8.8C15.3467 8.98736 15.4513 9.24081 15.4513 9.505C15.4513 9.76918 15.3467 10.0226 15.1605 10.21L10.2205 15.21C10.1259 15.3039 10.0134 15.3779 9.88978 15.4277C9.76613 15.4775 9.63378 15.5021 9.50049 15.5Z" fill="white"/>
                        </g>
                     </svg>
                     <span>Pool Explorer (soon)</span>
                  </a>
               </li>
               <li>
                  <a href="http://idma.su/dashboard/multi-swap.html">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27793 16.4538C3.39789 16.2876 3.67345 16.0196 3.67345 16.0196C4.64858 14.9792 7.07394 13.4121 8.30444 12.9089C8.30444 12.8984 9.03608 12.5999 9.38409 12.5882L9.43041 12.5882C9.9637 12.5882 10.4626 12.8867 10.7179 13.3665C10.8232 13.5643 10.9211 14.0454 10.9683 14.2776C10.984 14.3544 10.9941 14.404 10.997 14.4069C11.1016 15.0927 11.1704 16.1449 11.1704 17.3C11.1704 18.5124 11.1016 19.6102 10.9733 20.2855C10.9733 20.2972 10.8462 20.9139 10.7642 21.1199C10.6372 21.4172 10.4044 21.6688 10.1145 21.8291C9.88294 21.9438 9.63827 22 9.38409 22C9.11685 21.9895 8.618 21.8174 8.42083 21.7378C7.12026 21.2346 4.6367 19.588 3.68532 18.5815C3.57922 18.4769 3.46806 18.3579 3.39071 18.2752C3.34945 18.231 3.3178 18.1971 3.30169 18.1812C3.10452 17.9296 3 17.6206 3 17.2883C3 16.9922 3.09264 16.6949 3.27793 16.4538ZM10.1618 5.77138C10.6856 5.77138 11.1096 6.18918 11.1096 6.7053C11.1096 7.22141 10.6856 7.63922 10.1618 7.63922L5.58295 7.89669C4.91543 7.89669 4.375 7.36302 4.375 6.7053C4.375 6.04757 4.91543 5.51508 5.58295 5.51508L10.1618 5.77138ZM13.2356 2.88008C13.3639 2.58282 13.5955 2.3312 13.8853 2.17087C14.1169 2.05617 14.3616 2 14.617 2C14.883 2.01053 15.3831 2.18257 15.5802 2.26332C16.8796 2.76539 19.3633 4.41321 20.3158 5.41852C20.4194 5.52134 20.5284 5.63812 20.6055 5.7207L20.6055 5.72078C20.6486 5.76694 20.6817 5.80241 20.6983 5.81877C20.8955 6.07156 21 6.37936 21 6.71056C21 7.009 20.9074 7.30626 20.7209 7.54618C20.6021 7.71236 20.3265 7.98037 20.3265 7.98037C19.3526 9.02196 16.926 10.5879 15.6954 11.0911C15.6954 11.1028 14.965 11.4001 14.617 11.4118L14.5706 11.4118C14.0361 11.4118 13.5373 11.1145 13.2819 10.6335C13.1777 10.4361 13.0796 9.95649 13.0319 9.72383L13.0319 9.72381C13.016 9.64614 13.0058 9.59601 13.0028 9.59308C12.8983 8.90727 12.8294 7.85514 12.8294 6.70003C12.8294 5.48757 12.8983 4.38981 13.0265 3.71453C13.0265 3.70399 13.1536 3.08606 13.2356 2.88008ZM12.8905 17.2945C12.8905 17.8106 13.3146 18.2284 13.8383 18.2284L18.4171 18.4859C19.0846 18.4859 19.625 17.9522 19.625 17.2945C19.625 16.6367 19.0846 16.1042 18.4171 16.1042L13.8383 16.3605C13.3146 16.3605 12.8905 16.7784 12.8905 17.2945Z" fill="white"/>
                        </g>
                     </svg>
                     <span>Multiswap</span>
                  </a>
               </li>
               <li class="not-active">
                  <a href="#">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7071 8.79633C18.7071 10.0523 19.039 10.7925 19.7695 11.6456C20.3231 12.2741 20.5 13.0808 20.5 13.956C20.5 14.8302 20.2128 15.6601 19.6373 16.3339C18.884 17.1417 17.8215 17.6573 16.7372 17.747C15.1659 17.8809 13.5937 17.9937 12.0005 17.9937C10.4063 17.9937 8.83505 17.9263 7.26375 17.747C6.17846 17.6573 5.11602 17.1417 4.36367 16.3339C3.78822 15.6601 3.5 14.8302 3.5 13.956C3.5 13.0808 3.6779 12.2741 4.23049 11.6456C4.98384 10.7925 5.29392 10.0523 5.29392 8.79633V8.3703C5.29392 6.68834 5.71333 5.58852 6.577 4.51186C7.86106 2.9417 9.91935 2 11.9558 2H12.0452C14.1254 2 16.2502 2.98702 17.5125 4.62466C18.3314 5.67916 18.7071 6.73265 18.7071 8.3703V8.79633ZM9.07367 20.0608C9.07367 19.5573 9.53582 19.3266 9.96318 19.2279C10.4631 19.1222 13.5093 19.1222 14.0092 19.2279C14.4366 19.3266 14.8987 19.5573 14.8987 20.0608C14.8738 20.5402 14.5926 20.9653 14.204 21.2352C13.7001 21.628 13.1088 21.8767 12.4906 21.9664C12.1487 22.0107 11.8128 22.0117 11.4828 21.9664C10.8636 21.8767 10.2723 21.628 9.76938 21.2342C9.37978 20.9653 9.09852 20.5402 9.07367 20.0608Z" fill="white"/>
                        </g>
                     </svg>
                     <span>Alerts (soon)</span>
                  </a>
               </li>
               <li class="not-active">
                  <a href="#">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4022 13.5801C20.7599 13.7701 21.0358 14.0701 21.23 14.3701C21.6081 14.9901 21.5775 15.7501 21.2096 16.4201L20.4942 17.6201C20.1161 18.2601 19.4109 18.6601 18.6853 18.6601C18.3277 18.6601 17.9291 18.5601 17.6021 18.3601C17.3364 18.1901 17.0298 18.1301 16.7027 18.1301C15.691 18.1301 14.8428 18.9601 14.8121 19.9501C14.8121 21.1001 13.8719 22.0001 12.6967 22.0001H11.3068C10.1213 22.0001 9.18113 21.1001 9.18113 19.9501C9.16069 18.9601 8.31247 18.1301 7.30073 18.1301C6.96348 18.1301 6.6569 18.1901 6.40141 18.3601C6.07438 18.5601 5.6656 18.6601 5.31813 18.6601C4.58232 18.6601 3.87717 18.2601 3.49905 17.6201L2.7939 16.4201C2.41577 15.7701 2.39533 14.9901 2.77346 14.3701C2.93697 14.0701 3.24356 13.7701 3.59102 13.5801C3.87717 13.4401 4.06112 13.2101 4.23486 12.9401C4.74584 12.0801 4.43925 10.9501 3.57059 10.4401C2.55885 9.87012 2.23182 8.60012 2.81434 7.61012L3.49905 6.43012C4.09178 5.44012 5.35901 5.09012 6.38097 5.67012C7.27007 6.15012 8.42488 5.83012 8.94608 4.98012C9.10959 4.70012 9.20157 4.40012 9.18113 4.10012C9.16069 3.71012 9.27311 3.34012 9.46728 3.04012C9.8454 2.42012 10.5301 2.02012 11.2761 2.00012H12.7171C13.4734 2.00012 14.1581 2.42012 14.5362 3.04012C14.7201 3.34012 14.8428 3.71012 14.8121 4.10012C14.7917 4.40012 14.8837 4.70012 15.0472 4.98012C15.5684 5.83012 16.7232 6.15012 17.6225 5.67012C18.6342 5.09012 19.9117 5.44012 20.4942 6.43012L21.1789 7.61012C21.7716 8.60012 21.4446 9.87012 20.4227 10.4401C19.554 10.9501 19.2474 12.0801 19.7686 12.9401C19.9321 13.2101 20.1161 13.4401 20.4022 13.5801ZM9.10959 12.0101C9.10959 13.5801 10.4075 14.8301 12.012 14.8301C13.6164 14.8301 14.8837 13.5801 14.8837 12.0101C14.8837 10.4401 13.6164 9.18012 12.012 9.18012C10.4075 9.18012 9.10959 10.4401 9.10959 12.0101Z" fill="white"/>
                        </g>
                     </svg>
                     <span>Settings (soon)</span>
                  </a>
               </li>
               <li class="not-active">
                  <a href="#">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8498 2.50071C16.4808 2.50071 17.1108 2.58971 17.7098 2.79071C21.4008 3.99071 22.7308 8.04071 21.6198 11.5807C20.9898 13.3897 19.9598 15.0407 18.6108 16.3897C16.6798 18.2597 14.5608 19.9197 12.2798 21.3497L12.0298 21.5007L11.7698 21.3397C9.48077 19.9197 7.34977 18.2597 5.40077 16.3797C4.06077 15.0307 3.02977 13.3897 2.38977 11.5807C1.25977 8.04071 2.58977 3.99071 6.32077 2.76971C6.61077 2.66971 6.90977 2.59971 7.20977 2.56071H7.32977C7.61077 2.51971 7.88977 2.50071 8.16977 2.50071H8.27977C8.90977 2.51971 9.51977 2.62971 10.1108 2.83071H10.1698C10.2098 2.84971 10.2398 2.87071 10.2598 2.88971C10.4808 2.96071 10.6898 3.04071 10.8898 3.15071L11.2698 3.32071C11.3616 3.36968 11.4647 3.44451 11.5537 3.50918C11.6102 3.55015 11.661 3.58705 11.6998 3.61071C11.7161 3.62034 11.7327 3.63002 11.7494 3.63978C11.8351 3.68983 11.9245 3.74197 11.9998 3.79971C13.1108 2.95071 14.4598 2.49071 15.8498 2.50071ZM18.5098 9.70071C18.9198 9.68971 19.2698 9.36071 19.2998 8.93971V8.82071C19.3298 7.41971 18.4808 6.15071 17.1898 5.66071C16.7798 5.51971 16.3298 5.74071 16.1798 6.16071C16.0398 6.58071 16.2598 7.04071 16.6798 7.18971C17.3208 7.42971 17.7498 8.06071 17.7498 8.75971V8.79071C17.7308 9.01971 17.7998 9.24071 17.9398 9.41071C18.0798 9.58071 18.2898 9.67971 18.5098 9.70071Z" fill="white"/>
                        </g>
                     </svg>
                     <span>Favorites (soon)</span>
                  </a>
               </li>
            </ul>
         </div>
         <header class="d-header">
            <div class="d-header__inner">
               <div class="d-header__search__box">
                  <div class="search__input__wrapper">
                     <i class="fas fa-search"></i>
                     <input type="text" placeholder="Search by pair address/symbol">
                  </div>
               </div>
               <nav class="d-header__contacts">
                  <a href="#" class="d-header__telegram" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                  <p class="d-header__mail">
                     <span>Contact advertising</span>
                     <a href="mailto:info@bcharts.io">info@bcharts.io</a>
                  </p>
                  <a href="#" class="btn__yellow btn dfc"><i class="fas fa-wallet"></i><span>Connect</span></a>
               </nav>
            </div>
            <div class="mob__menu_show" id="menuToggle">
               <input type="checkbox" />
               <span id="span1"></span>
               <span id="span2"></span>
               <span id="span3"></span>
            </div>
         </header>
         <section class="strip__info">
            <div class="strip__block__fixed">
               <div class="tools-price__box item_strip">
                  <img src="images/bnb_icon.svg" alt="Icon">
                  <div class="tools-price">$0</div>
               </div>
               <div class="current-gas__box item_strip">
                  <img src="images/gas.svg" alt="Icon">
                  <div class="current-gas">10 GWEI</div>
               </div>
               <div class="trending__box item_strip">
                  <img src="images/trending.svg" alt="Icon">
                  <div class="trending">Trendings</div>
               </div>
            </div>
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container tradingview-widget_line">
               <div class="tradingview-widget-container__widget"></div>
               <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Ticker Tape</span></a> by TradingView</div>
               <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                  {
                     "symbols": [{
                        "description": "BTCUSDT",
                        "proName": "BINANCE:BTCUSDT"
                     }, {
                        "description": "ETHUSDT",
                        "proName": "BINANCE:ETHUSDT"
                     }, {
                        "description": "XRPUSDT",
                        "proName": "BINANCE:XRPUSDT"
                     }, {
                        "description": "BNBUSDT",
                        "proName": "BINANCE:BNBUSDT"
                     }],
                     "showSymbolLogo": true,
                     "colorTheme": "dark",
                     "isTransparent": false,
                     "displayMode": "adaptive",
                     "locale": "en"
                  }
               </script>
            </div>
            <!-- TradingView Widget END -->
         </section>
         <section class="s-widget__schedule">
            <!-- TradingView Widget BEGIN -->
            <!-- <div class="tradingview-widget-container tradingview-widget-grafik">
               <div id="tradingview_dc582"></div>
               <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">BTCUSDT Chart</span></a> by TradingView</div>
               <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
               <script type="text/javascript">
                  new TradingView.widget({
                     "width": 1500,
                     "height": 520,
                     "symbol": "BINANCE:BTCUSDT",
                     "interval": "15",
                     "timezone": "Etc/UTC",
                     "theme": "dark",
                     "style": "1",
                     "locale": "en",
                     "toolbar_bg": "#f1f3f6",
                     "enable_publishing": false,
                     "withdateranges": true,
                     "hide_side_toolbar": false,
                     "allow_symbol_change": true,
                     "details": true,
                     "container_id": "tradingview_dc582"
                  });
               </script>
               </div> -->
            <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
        <div id="tradingview_eccb6"></div>
        <div class="tradingview-widget-copyright"><a href="https://ru.tradingview.com/symbols/SWINGBYUSDT/?exchange=KUCOIN" rel="noopener" target="_blank"><span class="blue-text">График SWINGBYUSDT</span></a> от TradingView</div>
        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
        <script type="text/javascript">
        new TradingView.widget(
        {
        "width": 1500,
        "height": 520,
        "symbol": "KUCOIN:SWINGBYUSDT",
        "interval": "15",
        "timezone": "Etc/UTC",
        "theme": "dark",
        "style": "1",
        "locale": "ru",
        "toolbar_bg": "#f1f3f6",
        "enable_publishing": false,
        "hide_side_toolbar": false,
        "allow_symbol_change": true,
        "container_id": "tradingview_eccb6"
        }
        );
        </script>
        </div>
        <!-- TradingView Widget END -->

         </section>
         <section class="table__widget">
            <?php
               require_once 'parser/simple_html_dom.php';
                   $data = file_get_html('https://bscscan.com/txs?a=0x21dd71ab78ede3033c976948f769d506e4f489ee');
                   if ( $data->innertext!='' and count($data->find('div.table-responsive')) ) {
                       $var = $data->find('div.table-responsive');
                       //$table = $var->plaintext;
                       echo $var[0];
                   }
               ?>
         </section>
         <footer class="footer">
            <div class="footer__inner">
               <div class="footer__soclinks">
                  <a href="#" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                  <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
               </div>
               <div class="copirating">
                  <p>© bcharts.io 2021 - UPDATE v1.01 -
                     <a href="mailto:info@bcharts.io">info@bcharts.io</a>
                  </p>
               </div>
            </div>
         </footer>
      </div>
      <script src="js/slick.min.js"></script>
      <script src="js/plugins.min.js"></script>
      <script src="js/main.js "></script>
   </body>
</html>