import DashboardLayout from "@/Layouts/DashboardLayout.jsx";
import {Head, useForm} from "@inertiajs/react";
import successToast from "@/SweetAlerts/SuccessToast.js";

const AutomailIndex = ({template}) => {

    const {data, setData, post, reset, errors, clearErrors} = useForm({
        excel: null,
        email: '',
        subject: '',
        template: template.template,
    })

    const handleImport = () => {
        post(route('automail.import'), {
            onSuccess: () => {
                successToast('Excel Imported Successfully');
                reset();
                clearErrors();
            }
        });
    }

    const handleMailTesting = () => {
        post(route('automail.mailTemplateTesting'), {
            onSuccess: () => {
                successToast('Send Successfully');
                reset();
                clearErrors();
            }
        })
    }

    const handleTemplateUpdate = () => {
        post(route('automail.updateTemplate'), {
            onSuccess: () => {
                successToast('Template Updated');
                reset();
                clearErrors();
            }
        })
    }


    return (
        <DashboardLayout>
            <Head><title>Automail Service</title></Head>
            <div className="row mb-5">
                <div className="col-md">
                    <div className="card mb-3">
                        <div className="row g-0">
                            <div className="col-md-4">
                                <h5 className="my-3 mx-3">TEST TEMPLATE</h5>
                            </div>
                            <div className="col-md-8">
                                <div className="card-body">
                                    <div className="mb-3">
                                        <label htmlFor="email" className="form-label">Email</label>
                                        <div className="input-group">
                                            <input value={data.email} onChange={e => setData('email', e.target.value)}
                                                   type="text" className="form-control" id="email"
                                                   placeholder="Enter Email" aria-label="Email Address"
                                                   aria-describedby="button-addon2"/>

                                            <button onClick={handleMailTesting} className="btn btn-outline-primary"
                                                    type="button"
                                                    id="button-addon2">Test
                                            </button>

                                        </div>
                                        {errors.email && <span className="text-danger">{errors.email}</span>}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className="row mb-5">
                <div className="col-md">
                    <div className="card mb-3">
                        <div className="row g-0">
                            <div className="col-md-4">
                                <h5 className="my-3 mx-3">IMPORT EXCEL FILE</h5>
                            </div>
                            <div className="col-md-8">
                                <div className="card-body">
                                    <div className="mb-3">
                                        <label htmlFor="formFile" className="form-label">Import Excel</label>
                                        <input onChange={e => setData('excel', e.target.files[0])}
                                               className="form-control" type="file" id="formFile" accept=".xlsx"/>
                                        {errors.excel && <span className="text-danger">{errors.excel}</span>}
                                    </div>
                                    <div className="footer" style={{display: 'flex', justifyContent: 'flex-end'}}>
                                        <button onClick={handleImport} type="button" className="btn btn-dark">Import
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className="row mb-5">
                <div className="col-md">
                    <div className="card mb-3">
                        <div className="row g-0">
                            <div className="col-md-4">
                                <h5 className="my-3 mx-3">TEMPLATE PREVIEW</h5>
                                <div style={{height: "400px", width: "400px", overflow: "auto", marginLeft: "10px"}}>
                                    <div dangerouslySetInnerHTML={{__html: data.template}}/>
                                </div>
                            </div>
                            <div className="col-md-8">
                                <div className="card-body">
                                    <div className="mb-3">
                                        <label htmlFor="subject" className="form-label">Subject</label>
                                        <div className="input-group">
                                            <input onChange={e => setData('subject', e.target.value)} id="subject" type="text" className="form-control"
                                                   placeholder="Enter Subject"
                                                   aria-label="subject" aria-describedby="basic-addon11"/>
                                        </div>
                                    </div>
                                    <div className="mb-3">
                                        <label htmlFor="template-code" className="form-label">Template Code</label>
                                        <div className="input-group">
                                            <textarea rows={10} onChange={e => setData('template', e.target.value)}
                                                      id="template-code" className="form-control"
                                                      aria-label="With textarea" placeholder="<Html/>"></textarea>
                                        </div>
                                    </div>
                                    <div className="footer" style={{display: 'flex', justifyContent: 'flex-end'}}>
                                        <button onClick={handleTemplateUpdate} type="button" className="btn btn-dark">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </DashboardLayout>
    )
}

export default AutomailIndex;
