call plug#begin('~/.vim/plugged')

" On-demand loading
Plug 'scrooloose/nerdtree', { 'on':  'NERDTreeToggle' }
Plug 'jiangmiao/auto-pairs'


"color schemes
Plug 'morhetz/gruvbox'
call plug#end()


" show line numbers
set number

" replace tabs with spaces
set expandtab

set tabstop=2

" highlight search results (after pressing Enter)
set hlsearch

" show the mathing brackets
set showmatch

" when creating a new line, copy the indentation from the line above
set autoindent

set incsearch
set encoding=utf-8

"may remove if something is broke
set autoread

syntax on
colorscheme gruvbox
set background=dark

" highlight current line
set cursorline

"maping

map <C-n> :NERDTreeToggle<CR>
