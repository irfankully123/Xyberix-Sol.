
const Pagination = ({ pagelinks = [], activeLink, last_page, moveToLastPage, moveToFirstPage, moveToNextPage, moveToPrePage }) => {

    const links = pagelinks.map((link, index) => {
        if (link.label === '&laquo; Previous' || link.label === 'Next &raquo;') {
            return null;
        }
        return (
            <li key={index} className={link.active ? 'page-item active' : 'page-item'}>
                <button type="button" onClick={() => activeLink(parseInt(link.label, 10))} className="page-link">
                    {link.label}
                </button>
            </li>
        );
    });

    return (
        <>
            <div className="row">
                <div className="col d-flex justify-content-end">
                    <div className="demo-inline-spacing">
                        <nav aria-label="Page navigation">
                            <ul className="pagination">
                                <li className="page-item first mx-sm-n2">
                                    <button onClick={() => moveToFirstPage()} className="page-link" ><i className="tf-icon bx bx-chevrons-left"></i></button>
                                </li>
                                <li>
                                    <button onClick={() => moveToPrePage()} className="page-link mx-0" >Previous</button>
                                </li>
                                {links}
                                <li>
                                    <button onClick={() => moveToNextPage()} className="page-link mx-1" >Next</button>
                                </li>
                                <li className="page-item last mx-sm-n2">
                                    <button onClick={() => moveToLastPage(last_page)} className="page-link" ><i className="tf-icon bx bx-chevrons-right"></i></button>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </>
    );

}
export default Pagination;
{/* <div class="col-sm-12 col-md-6">
   <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
      <ul class="pagination">
         <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li>
         <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
         <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a></li>
         <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="2" tabindex="0" class="page-link">3</a></li>
         <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="3" tabindex="0" class="page-link">4</a></li>
         <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="4" tabindex="0" class="page-link">5</a></li>
         <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li>
      </ul>
   </div>
</div> */}