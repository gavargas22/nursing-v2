<?php get_header(); ?>
<div class="container" id="single-page">
  			<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="hero-unit" id="single-page-teaser" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/alumni.jpg); color:#ffffff; background-size:cover;">
                 <h1>About Us</h1> 
                <p><strong>Excellence</strong> in everything we do │ <strong>Innovation</strong> to compete in the global healthcare environment │<strong>Diversity</strong>, our greatest resource.</p>
            </div>
            
            <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                	<img src="<?php bloginfo('stylesheet_directory'); ?>/img/cards/02.jpeg" />
                 <div class="caption">
                    <h2>Message from the Dean</h2>
                    <p>
                    	Whether you’re a current nursing student, interested in becoming a student, or just want to see what the UTEP School of Nursing is up to, 
                    	you’ll be blown away by the quality of the education and service we provide, the state-of-the-art facilities and equipment we offer, 
                    	and the rich environment we afford to our diverse student body and faculty. 
                    </p>
                    <p><a class="btn" href="#">Read More</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAADICAYAAABS39xVAAAL60lEQVR4Xu3bCY8UVRcG4EI0ils0BIi7iQgiIhqNmrj9dnfiAlHQgAoqGOMScd8XvpxKqtP2NyNTyBvmwHMTA87UnD793MubW7drtpw9e/bcYBAgQKCBwBaB1WCWtEiAwCggsCwEAgTaCAisNlOlUQIEBJY1QIBAGwGB1WaqNEqAgMCyBggQaCMgsNpMlUYJEBBY1gABAm0EBFabqdIoAQICyxogQKCNgMBqM1UaJUBAYFkDBAi0ERBYbaZKowQICCxrgACBNgICq81UaZQAAYFlDRAg0EZAYLWZKo0SICCwrAECBNoICKw2U6VRAgQEljVAgEAbAYHVZqo0SoCAwLIGCBBoIyCw2kyVRgkQEFjWAAECbQQEVpup0igBAgLLGiBAoI2AwGozVRolQEBgWQMECLQREFhtpkqjBAgILGuAAIE2AgKrzVRplAABgWUNECDQRkBgtZkqjRIgILCsAQIE2ggIrDZTpVECBASWNUCAQBsBgdVmqjRKgIDAsgYIEGgjILDaTJVGCRAQWNYAAQJtBARWm6nSKAECAssaIECgjYDAajNVGiVAQGBZAwQItBEQWG2mSqMECAgsa4AAgTYCAqvNVGmUAAGBZQ0QINBGQGC1mSqNEiAgsKwBAgTaCAisNlOlUQIEBJY1QIBAGwGB1WaqNEqAgMCyBggQaCMgsNpMlUYJEBBY1gABAm0EBFabqdIoAQICyxogQKCNgMBqM1UaJUBAYFkDBAi0ERBYbaZKowQICCxrgACBNgICq81UaZQAAYFlDRAg0EZAYLWZKo0SICCwrAECBNoICKw2U6VRAgQEljVAgEAbAYHVZqo0SoCAwLIGCBBoIyCw2kyVRgkQEFjWAAECbQQEVpup0igBAgLLGiBAoI2AwGozVRolQEBgWQMECLQREFhtpkqjBAgILGuAAIE2AgKrzVRplAABgWUNECDQRkBgtZkqjRIgILCsAQIE2ggIrDZTpVECBASWNUCAQBsBgdVmqjRKgIDAsgYIEGgjILDaTJVGCRAQWNYAAQJtBARWm6nSKAECAssaIECgjYDAajNVGiVAQGBdRmvg77//Hv7666/hqquuGrZu3fqv72y6ti665pprLtq1czn/+OOP8UcuZg9z3tvcfl1/aQUE1qX1vyiv/ssvvwxHjx4dvv/++0W9a6+9dtizZ8+wa9euf7xGBcSxY8eGr7/+evH1q6++erjvvvuGu+6664KvnfNGfvvtt7GHb775ZvFjFVj333//cPvtt19wD3Pe25x+Xbt5BATW5pmLC+rk119/HV599dWhdhVrjQqBe+65Z/zWuXPnhpdffnmowFhrPPDAA8Odd945+9o5jf/555/DSy+9NO4E1xoVWA8++ODsHua8tzn9unZzCQiszTUfs7upndUXX3yx+LnaUX311VeLAKvbw+eff368Rfzss8+G9957b3Htzp07h++++24RYLXTevbZZ2dfO6fp48ePD59++uniR2655Zbhxx9/HCrIpvH4448P9fXN0O+c9+bavIDAyhvHXqF2Fa+99trw888/j6/x5JNPDjfddNNQt4i166rv13j66aeHbdu2DYcPHx7Onj07fm3ayfz+++/jrmvaoU1hsdFrr7vuuuHEiRPjuVntmm677bbFbWh9vXZzW7ZsGa6//vrxtvPQoUNjQNWoW9a77777/3Z++/fvH+tstIcKtznXxiZE4biAwIoTZ1/g7bffHn766afx0Pqxxx4bg6N2Ky+++OIYQhUWFVj1/boVm3YyU4hVd0eOHFmcadXtWO3SLvTaer3a0dX5VPU2jd27dw/33nvvWHe6JX3mmWeGCrwa77zzzvDll18uwnTv3r0X3MO/vbfVM7Ls7Kh+sQUE1sUWvYT1Kri+/fbb4cyZM4tdTAVC/QOuA+nlndRyWHz44YfDxx9/PHZeYVVhsdFrDxw4ML5W7ZymUbea9QFAna/VuPnmm4cnnnhi/Hv1WDuxCrYbb7xx/LN2gi+88MIiTGuHtX379g33MLffSzhFXvo/Cgis/wi4mX58+Xyodlq1w3r44YeHCpDlXVf1vBxY77///nD69OlFYO3bt2+xQzvftRVYNZZrLJtMO7xpJ7XqVUH65ptvjkE2jaeeemrceU27xPP1cCH9bqZ508vGBQTWxq02/ZVrhUYdpFc41UgGwHqf0i1/8rgKWAf+b7311j8+4axHK2rHlA7YTT+ZGlxTQGBdRgujdlT1D/3zzz8fdzzTON8t1nLQ1W6sQma9W8LVa2sHN4060K/D72lMt6O1y1odh2zwwfDJJ5/848t1AF8H8TVWPwxYb0f4X/q9jKb+inkrAqvxVNft1Lvvvju+gzpUrwPzKRyWPzWrc6m6bVp+/mk5AJYfjajntu64444NXzs941U91G5p+WHQ+lrdMq4+vLp8ZlbXVM+PPPLIeG41jdXntRL9Np76K7Z1gdV46msXUiFUt2N1ZvXcc88NdQtYox53mM6Fpk/o3njjjfG5qxrTA6WrB94HDx4cduzYMcy5turVQX89xrA6VvuqDwXqzGoat9566/Doo4+O/a+OOT3MubbxlF/xrQusxktgNWzq13Hqdq4ezFz+1ZsKhNq9fPTRR8PJkycX7/ihhx4aHzKdHjydHkmo0JtzbX0a+Morryye+6pnrqZnw+rFKgArCGssB0v9f71WhdX0zFj9WU/bV8jO6WHOtY2n/IpvXWA1XwKnTp0a6r/1Rj06UA+UVhid79dipgPvqrXRaytgKoSm32OcQq96mj55rHoVjhVcy893rddznUvV2dhGe5jTb/PpvuLbF1iXwRJY6wB72tnUGdLy7VY9Bf/666+Pz2Utjzq3qnOu5bGRa1cP2qfbz6pfu67pQdU6gK/grMP89X6PcHrt5V420sP0c3OuvQym/Yp8CwLrMpn2+oTwhx9+GIOodjk33HDD4inytd7idMtY4VG7sLqNW2/MuTbFOaeHOdem+lU3IyCwMq6qEiAQEBBYAVQlCRDICAisjKuqBAgEBARWAFVJAgQyAgIr46oqAQIBAYEVQFWSAIGMgMDKuKpKgEBAQGAFUJUkQCAjILAyrqoSIBAQEFgBVCUJEMgICKyMq6oECAQEBFYAVUkCBDICAivjqioBAgEBgRVAVZIAgYyAwMq4qkqAQEBAYAVQlSRAICMgsDKuqhIgEBAQWAFUJQkQyAgIrIyrqgQIBAQEVgBVSQIEMgICK+OqKgECAQGBFUBVkgCBjIDAyriqSoBAQEBgBVCVJEAgIyCwMq6qEiAQEBBYAVQlCRDICAisjKuqBAgEBARWAFVJAgQyAgIr46oqAQIBAYEVQFWSAIGMgMDKuKpKgEBAQGAFUJUkQCAjILAyrqoSIBAQEFgBVCUJEMgICKyMq6oECAQEBFYAVUkCBDICAivjqioBAgEBgRVAVZIAgYyAwMq4qkqAQEBAYAVQlSRAICMgsDKuqhIgEBAQWAFUJQkQyAgIrIyrqgQIBAQEVgBVSQIEMgICK+OqKgECAQGBFUBVkgCBjIDAyriqSoBAQEBgBVCVJEAgIyCwMq6qEiAQEBBYAVQlCRDICAisjKuqBAgEBARWAFVJAgQyAgIr46oqAQIBAYEVQFWSAIGMgMDKuKpKgEBAQGAFUJUkQCAjILAyrqoSIBAQEFgBVCUJEMgICKyMq6oECAQEBFYAVUkCBDICAivjqioBAgEBgRVAVZIAgYyAwMq4qkqAQEBAYAVQlSRAICMgsDKuqhIgEBAQWAFUJQkQyAgIrIyrqgQIBAQEVgBVSQIEMgICK+OqKgECAQGBFUBVkgCBjIDAyriqSoBAQEBgBVCVJEAgIyCwMq6qEiAQEBBYAVQlCRDICAisjKuqBAgEBARWAFVJAgQyAgIr46oqAQIBAYEVQFWSAIGMgMDKuKpKgEBAQGAFUJUkQCAjILAyrqoSIBAQEFgBVCUJEMgICKyMq6oECAQEBFYAVUkCBDICAivjqioBAgEBgRVAVZIAgYyAwMq4qkqAQEBAYAVQlSRAICMgsDKuqhIgEBAQWAFUJQkQyAgIrIyrqgQIBAQEVgBVSQIEMgL/A18IXjoHbg2UAAAAAElFTkSuQmCC">
                  <div class="caption">
                    <h2>Philosophy, Mission &amp; Vision</h2>
                    <p>
                    	The UTEP School of Nursing, views nursing as a professional service discipline grounded in the arts, sciences, humanities, 
                    	and the application of knowledge obtained through scientifically based inquiry.
                    </p>
                    <p><a class="btn" href="#">Read More</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="data:image/png;base64,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">
                  <div class="caption">
                    <h2>School of Nursing History</h2>
                    <p>
                    	The School of Nursing started as the Hotel Dieu Training School for nurses in 1898, the first nursing school in El Paso, 
                    	and joined The University of Texas at El Paso in 1976.
                    </p>
                    <p><a class="btn" href="#">Read More</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="data:image/png;base64,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">
                  <div class="caption">
                    <h2>Office of the Dean</h2>
                    <p>
                    	The leadership team at the UTEP School of Nursing is knowledgeable and committed to success of our students and the support of faculty, 
                    	staff and community.
                    </p>
                    <p><a class="btn" href="#">Read More</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="data:image/png;base64,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">
                  <div class="caption">
                    <h2>Faculty &amp; Staff Directory</h2>
                    <p>
                    	UTEP School of Nursing faculty have various, educational, research, practice and service backgrounds. 
                    	All faculty actively participate in preparing the nurses of tomorrow.
                    </p>
                    <p><a class="btn" href="#">Read More</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
            
</div>
<?php get_footer(); ?>