
    <!-- Categorias movil -->
    <ul id="noticias-categorias-small-medium" class="small-12 columns p0 accordion mt2 hide-for-large" data-accordion>

      <!-- acordion categorias -->
      <li class="columns accordion-item p0" data-accordion-item>

        <a href="#" class="accordion-title ha">
          Categorias:
          <?php
          for ($i=0; $i < 4; $i++) {
            echo  '<a href="">
              <div class="small-6 columns fontXS p1">Cat' . $i . '</div>
            </a>';
          }
          ?>
        </a>

        <!-- contenido acordeon -->
        <div class="accordion-content p0" data-tab-content>

          <ul class="menu small-12 columns p0">
            <?php
            for ($i=0; $i < 12; $i++) {
              echo  '<a href="">
                <li class="small-4 columns fontXS p3 text-center">Cat' . $i . '</li>
              </a>';
            }
            ?>
          </ul>

        </div>
      </li>

      <!-- acordeon tags -->
      <li class="columns accordion-item p0" data-accordion-item>

        <a href="#" class="accordion-title ha">
          Tags:
          <?php
          for ($i=0; $i < 6; $i++) {
            echo  '<a href="">
              <div class="small-4 columns fontXS p1">Tag' . $i . '</div>
            </a>';
          }
          ?>
        </a>

        <!-- contenido acordeon -->
        <div class="accordion-content p0" data-tab-content>

          <ul class="menu small-12 columns p0">
            <?php
            for ($i=0; $i < 32; $i++) {
              echo  '<a href="">
                <li class="small-4 columns fontXS p3 text-center">Tag' . $i . '</li>
              </a>';
            }
            ?>
          </ul>

        </div>
      </li>
    </ul>
    <!-- Categorias movil -->
