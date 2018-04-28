<?php
namespace App\Application\Infrastructure\Interfaces\Bootstrap\Utilities;

interface IBootstrapDisplay
{
  const DISPLAY_NONE = 'd-none';
  const DISPLAY_BLOCK = 'd-block';
  const DISPLAY_INLINE = 'd-inline';
  const DISPLAY_INLINE_BLOCK = 'd-inline-block';
  const DISPLAY_INLINE_FLEX = 'd-inline-flex';
  const DISPLAY_FLEX = 'd-flex';
  const DISPLAY_TABLE = 'd-table';
  const DISPLAY_TABLE_ROW = 'd-table-row';
  const DISPLAY_TABLE_CELL = 'd-table-cell';

  // print
  const DISPLAY_PRINT_NONE = 'd-print-none';
  const DISPLAY_PRINT_BLOCK = 'd-print-block';
  const DISPLAY_PRINT_INLINE = 'd-print-inline';
  const DISPLAY_PRINT_INLINE_BLOCK = 'd-print-inline-block';
  const DISPLAY_PRINT_INLINE_FLEX = 'd-print-inline-flex';
  const DISPLAY_PRINT_FLEX = 'd-print-flex';
  const DISPLAY_PRINT_TABLE = 'd-print-table';
  const DISPLAY_PRINT_TABLE_ROW = 'd-print-table-row';
  const DISPLAY_PRINT_TABLE_CELL = 'd-print-table-cell';

  /** breakpoints */
  // sm
  const DISPLAY_NONE_SM = 'd-sm-none';
  const DISPLAY_BLOCK_SM = 'd-sm-block';
  const DISPLAY_INLINE_SM = 'd-sm-inline';
  const DISPLAY_INLINE_BLOCK_SM = 'd-sm-inline-block';
  const DISPLAY_INLINE_FLEX_SM = 'd-sm-inline-flex';
  const DISPLAY_FLEX_SM = 'd-sm-flex';
  const DISPLAY_TABLE_SM = 'd-sm-table';
  const DISPLAY_TABLE_ROW_SM = 'd-sm-table-row';
  const DISPLAY_TABLE_CELL_SM = 'd-sm-table-cell';

  // md
  const DISPLAY_NONE_MD = 'd-md-none';
  const DISPLAY_BLOCK_MD = 'd-md-block';
  const DISPLAY_INLINE_MD = 'd-md-inline';
  const DISPLAY_INLINE_BLOCK_MD = 'd-md-inline-block';
  const DISPLAY_INLINE_FLEX_MD = 'd-md-inline-flex';
  const DISPLAY_FLEX_MD = 'd-md-flex';
  const DISPLAY_TABLE_MD = 'd-md-table';
  const DISPLAY_TABLE_ROW_MD = 'd-md-table-row';
  const DISPLAY_TABLE_CELL_MD = 'd-md-table-cell';

  // lg
  const DISPLAY_NONE_LG = 'd-lg-none';
  const DISPLAY_BLOCK_LG = 'd-lg-block';
  const DISPLAY_INLINE_LG = 'd-lg-inline';
  const DISPLAY_INLINE_BLOCK_LG = 'd-lg-inline-block';
  const DISPLAY_INLINE_FLEX_LG = 'd-lg-inline-flex';
  const DISPLAY_FLEX_LG = 'd-lg-flex';
  const DISPLAY_TABLE_LG = 'd-lg-table';
  const DISPLAY_TABLE_ROW_LG = 'd-lg-table-row';
  const DISPLAY_TABLE_CELL_LG = 'd-lg-table-cell';

  // xl
  const DISPLAY_NONE_XL = 'd-xl-none';
  const DISPLAY_BLOCK_XL = 'd-xl-block';
  const DISPLAY_INLINE_XL = 'd-xl-inline';
  const DISPLAY_INLINE_BLOCK_XL = 'd-xl-inline-block';
  const DISPLAY_INLINE_FLEX_XL = 'd-xl-inline-flex';
  const DISPLAY_FLEX_XL = 'd-xl-flex';
  const DISPLAY_TABLE_XL = 'd-xl-table';
  const DISPLAY_TABLE_ROW_XL = 'd-xl-table-row';
  const DISPLAY_TABLE_CELL_XL = 'd-xl-table-cell';
}
