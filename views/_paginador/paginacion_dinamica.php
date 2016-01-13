<?php if (isset($this->_paginacion)): ?>

    <div class="pagination" style="text-align: center;">
        <ul>
            <?php if ($this->_paginacion['primero']): ?>

                <li><a  class="pagina" pagina="<?php echo $this->_paginacion['primero']; ?>" href="javascript:void(0);">&laquo;</a></li>

            <?php else: ?>

                <li class="disabled"><span>&laquo;</span></li>

            <?php endif; ?>

            <?php if ($this->_paginacion['anterior']): ?>

                <li><a  class="pagina" pagina="<?php echo $this->_paginacion['anterior']; ?>" href="javascript:void(0);">&lsaquo;</a></li>

            <?php else: ?>

                <li class="disabled"><span>&lsaquo;</span></li>

            <?php endif; ?>

            <?php for ($i = 0; $i < count($this->_paginacion['rango']); $i++): ?>

                <?php if ($this->_paginacion['actual'] == $this->_paginacion['rango'][$i]): ?>

                    <li class="active"><span><?php echo $this->_paginacion['rango'][$i]; ?></span></li>

                <?php else: ?>

                    <li>
                        <a  class="pagina" pagina="<?php echo $this->_paginacion['rango'][$i]; ?>" href="javascript:void(0);">
                            <?php echo $this->_paginacion['rango'][$i]; ?>
                        </a>
                    </li>

                <?php endif; ?>

            <?php endfor; ?>

            <?php if ($this->_paginacion['siguiente']): ?>

                <li><a  class="pagina" pagina="<?php echo $this->_paginacion['siguiente']; ?>" href="javascript:void(0);">&rsaquo;</a></li>

            <?php else: ?>

                <li class="disabled"><span>&rsaquo;</span></li>

            <?php endif; ?>

            <?php if ($this->_paginacion['ultimo']): ?>

                <li><a  class="pagina" pagina="<?php echo $this->_paginacion['ultimo']; ?>" href="javascript:void(0);">&raquo;</a></li>

            <?php else: ?>

                <li class="disabled"><span>&raquo;</span></li>

            <?php endif; ?>
        </ul>
    </div>

    <div style="text-align: center">
        <p>
            <small>
                P&aacute;gina <?php echo $this->_paginacion['actual']; ?> de <?php echo $this->_paginacion['total']; ?>

                <br>
                N&uacute;mero total de registros: <?php echo $this->_paginacion['totalregistros']; ?> 
                <!-- <br>
                 Registros por pagina: 
                 <select id="registros" class="span1">
                <?php // for ($i = 10; $i <= 100; $i += 10): ?>
                         <option value="<?php //echo $i;   ?>" <?php
                // if ($i == $this->_paginacion['limite']) {
                //  echo 'selected="selected"';
                //}
                ?>  ><?php //echo $i; ?></option>
                <?php //endfor; ?>
                 </select>-->
            </small>
        </p>
    </div>

<?php endif; ?>