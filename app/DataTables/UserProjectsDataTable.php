<?php

namespace App\DataTables;

use App\Models\User;
use App\Models\Projects;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UserProjectsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public $i = 1;

    public function dataTable($query)
    {
        $this->i = $this->request()->get('start') + 1;

        return datatables()
            ->eloquent($query)
            ->addColumn('#', function ($query) {
                return $this->i++;
            })
            ->addColumn('action', '<span>
    <a href="javascript:;"
       class="btn btn-sm btn-clean btn-icon mr-2 view_report"
       title="Report details" id="{{ $id }}"
       data-user_id="{{ $user_id }}" data-project_name="{{$name}}">
        <span class="svg-icon svg-icon-primary svg-md">
            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Shopping/Chart-bar1.svg--><svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none"
                   fill-rule="evenodd">
                    <rect x="0" y="0" width="24"
                          height="24" />
                    <rect fill="#000000" opacity="0.3" x="12"
                          y="4" width="3" height="13"
                          rx="1.5" />
                    <rect fill="#000000" opacity="0.3" x="7"
                          y="9" width="3" height="8"
                          rx="1.5" />
                    <path
                        d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
                        fill="#000000" fill-rule="nonzero" />
                    <rect fill="#000000" opacity="0.3" x="17"
                          y="11" width="3" height="6"
                          rx="1.5" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </a>


    <a href="javascript:;"
       class="btn btn-sm btn-clean btn-icon mr-2 view_project"
       title="View Project details" id="{{ $id }}"
       data-user_id="{{ $user_id }}">
        <span class="svg-icon svg-icon-primary svg-md">
            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/General/Expand-arrows.svg--><svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none"
                   fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <path
                        d="M10.5857864,12 L5.46446609,6.87867966 C5.0739418,6.48815536 5.0739418,5.85499039 5.46446609,5.46446609 C5.85499039,5.0739418 6.48815536,5.0739418 6.87867966,5.46446609 L12,10.5857864 L18.1923882,4.39339828 C18.5829124,4.00287399 19.2160774,4.00287399 19.6066017,4.39339828 C19.997126,4.78392257 19.997126,5.41708755 19.6066017,5.80761184 L13.4142136,12 L19.6066017,18.1923882 C19.997126,18.5829124 19.997126,19.2160774 19.6066017,19.6066017 C19.2160774,19.997126 18.5829124,19.997126 18.1923882,19.6066017 L12,13.4142136 L6.87867966,18.5355339 C6.48815536,18.9260582 5.85499039,18.9260582 5.46446609,18.5355339 C5.0739418,18.1450096 5.0739418,17.5118446 5.46446609,17.1213203 L10.5857864,12 Z"
                        fill="#000000" opacity="0.3"
                        transform="translate(12.535534, 12.000000) rotate(-360.000000) translate(-12.535534, -12.000000) " />
                    <path
                        d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </a>

    <a href="javascript:;"
       class="btn btn-sm btn-clean btn-icon mr-2 edit_project"
       title="Edit details" id="{{ $id }}"
       data-user_id="{{ $user_id }}">
        <span class="svg-icon svg-icon-primary svg-icon-md">
            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Design/Edit.svg--><svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none"
                   fill-rule="evenodd">
                    <rect x="0" y="0" width="24"
                          height="24" />
                    <path
                        d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                        fill="#000000" fill-rule="nonzero"
                        transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                    <rect fill="#000000" opacity="0.3" x="5"
                          y="20" width="15" height="2"
                          rx="1" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </a>

    <a href="javascript:;"
       class="btn btn-sm btn-clean btn-icon mr-2 delete_project"
       title="Delete Project" id="{{ $id }}"
       data-user_id="{{ $user_id }}">
        <span class="svg-icon svg-icon-primary svg-md">
            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Home/Trash.svg--><svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none"
                   fill-rule="evenodd">
                    <rect x="0" y="0" width="24"
                          height="24" />
                    <path
                        d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z"
                        fill="#000000" fill-rule="nonzero" />
                    <path
                        d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                        fill="#000000" opacity="0.3" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </a>

    <a href="javascript:;"
       class="btn btn-sm btn-clean btn-icon mr-2 mail_project"
       title="Send Mail" id="{{ $id }}"
       data-user_id="{{ $user_id }}">
        <span class="svg-icon svg-icon-primary svg-icon-md">
            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Communication/Outgoing-mail.svg--><svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none"
                   fill-rule="evenodd">
                    <rect x="0" y="0" width="24"
                          height="24" />
                    <path
                        d="M5,9 L19,9 C20.1045695,9 21,9.8954305 21,11 L21,20 C21,21.1045695 20.1045695,22 19,22 L5,22 C3.8954305,22 3,21.1045695 3,20 L3,11 C3,9.8954305 3.8954305,9 5,9 Z M18.1444251,10.8396467 L12,14.1481833 L5.85557487,10.8396467 C5.4908718,10.6432681 5.03602525,10.7797221 4.83964668,11.1444251 C4.6432681,11.5091282 4.77972206,11.9639747 5.14442513,12.1603533 L11.6444251,15.6603533 C11.8664074,15.7798822 12.1335926,15.7798822 12.3555749,15.6603533 L18.8555749,12.1603533 C19.2202779,11.9639747 19.3567319,11.5091282 19.1603533,11.1444251 C18.9639747,10.7797221 18.5091282,10.6432681 18.1444251,10.8396467 Z"
                        fill="#000000" />
                    <path
                        d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z"
                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                        transform="translate(11.959697, 3.661508) rotate(-90.000000) translate(-11.959697, -3.661508) " />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </a>

    <a href="javascript:;"
       class="btn btn-sm btn-clean btn-icon mr-2 upload_project_files"
       title="Edit details" id="{{ $id }}"
       data-user_id="{{ $user_id }}">
        <span class="svg-icon svg-icon-primary svg-icon-md">
            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo7/dist/../src/media/svg/icons/Communication/Outgoing-box.svg--><svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none"
                   fill-rule="evenodd">
                    <rect x="0" y="0" width="24"
                          height="24" />
                    <path
                        d="M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z"
                        fill="#000000" />
                    <path
                        d="M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z"
                        fill="#000000" opacity="0.3" />
                    <path
                        d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z"
                        fill="#000000" fill-rule="nonzero"
                        transform="translate(11.959697, 3.661508) rotate(-90.000000) translate(-11.959697, -3.661508) " />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </a>
</span>');
    }

    /*
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model, Projects $projects)
    {
        $user_id = $this->user_id;
        $data = Projects::where('user_id', $user_id);
        return $data;

    }


    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('userprojects-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->responsive(true)
            ->orderBy(0);

    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('#')->title('#')->searchable(false)->orderable(false),
            Column::make('id'),
            Column::make('name')
                ->title('Project Name')
                ->addClass('text-uppercase'),
            Column::make('description')
                ->title('Project Description')
                ->addClass('text-uppercase'),
            Column::make('project_code')
                ->title('Project Code')
                ->addClass('text-uppercase'),
            Column::make('project_work_type')
                ->title('Project Work Type')
                ->addClass('text-uppercase'),

            Column::make('project_status')
                ->title('Project Status')
                ->addClass('text-uppercase'),

            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center')
                ->addClass('all'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'UserProjects_' . date('YmdHis');
    }
}
