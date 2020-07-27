<template>
	<div>
		<a-form
			:form="form"
			@submit="handleSubmit"
		>

			<a-row :gutter="18">
				<a-col
					class="gutter-row"
					:span="8"
					:style="{ display: 'block' }"
				>
					<a-form-item  label="1. Application Number">
						<a-input
							placeholder="Application Number"
							@blur="handleConfirmBlur"
							disabled
						/>
					</a-form-item>

					<a-form-item label="2. Date Applied" :colon="true">
						<a-date-picker
							type="date"
							placeholder="Pick a date"
							style="width: 100%;"
							disabled
						/>
					</a-form-item>

					<a-form-item ref="applicant_name" label="3. Name of Applicant" :colon="true">
						<a-input
							placeholder="Name of Applicant"
							v-decorator="['applicant_name', rules.applicant_name]"
							@blur="handleConfirmBlur"
						/>
					</a-form-item>

					<a-form-item ref="company_name" label="4. Company Name" :colon="true">
						<a-input
							placeholder="Company Name"
							v-decorator="['company_name', rules.company_name]"
							@blur="handleConfirmBlur"
						/>
					</a-form-item>

					<a-form-item ref="authorized_representative" label="5. Name of Authorized Representative" :colon="true">
						<a-input
							placeholder="Name of Authorized Representative"
							v-decorator="['authorized_rep', rules.authorized_rep]"
							@blur="handleConfirmBlur"
						/>
					</a-form-item>

					<a-form-item ref="corp_address" label="6. Address of Corporation" :colon="true">
						<a-input
							placeholder="Address of Corporation"
							v-decorator="['corp_address', rules.corp_address]"
							@blur="handleConfirmBlur"
						/>
					</a-form-item>

					<a-form-item ref="property_id_num" label="7. Property Identification Number(PIN)" :colon="true">
						<a-input
							placeholder="Property Identification Number(PIN)"
							v-decorator="['property_id_num', rules.property_id_num]"
							@blur="handleConfirmBlur"
						/>
					</a-form-item>

					<a-form-item ref="property_class" label="8. Property Class" :colon="true">
						<a-input
							placeholder="Property Class"
							@blur="handleConfirmBlur"
							disabled
						/>
					</a-form-item>

					<a-form-item ref="type_of_project" label="9. Type of Project" :colon="true">
						<a-select
							placeholder="Type of Project"
							v-decorator="['type_of_project', rules.type_of_project]"
						>

							<template v-for="(type, index) in select_options.type_of_projects">
								<a-select-option :value="type" :key="index">
									{{ type }}
								</a-select-option>
							</template>

						</a-select>
					</a-form-item>

					<a-form-item label="10. Allowable Projects (If others, please specify)" :colon="true">
						<a-select
							placeholder="Please select allowable project"
						>
							<a-select-option value="shanghai">
								Zone one
							</a-select-option>
							<a-select-option value="beijing">
								Zone two
							</a-select-option>
						</a-select>
					</a-form-item>

					<a-form-item ref="nature_of_project" label="11. Nature of Projects (If others, please specify)" :colon="true">

						<a-input-group>
							<a-row :gutter="18">

								<a-col :span="12">
									<a-select
										v-decorator="['nature_of_project', rules.nature_of_project]"
										placeholder="Nature of Projects"
										style="width: 100%;"
										@change="natureOfProject"
									>
										<template v-for="(type, index) in select_options.nature_of_projects">
											<a-select-option :value="type" :key="index">
												{{ type }}
											</a-select-option>
										</template>
									</a-select>
								</a-col>

								<a-col :span="12">
									<a-input
										v-model="extra_fields.project_nature.value"
									 	placeholder="specify nature of project"
										:disabled="extra_fields.project_nature.specify_field == true ? false : true"
									/>
								</a-col>

							</a-row>
						</a-input-group>

					</a-form-item>

				</a-col>

				<a-col
					class="gutter-row"
					:span="8"
					:style="{ display: 'block' }"
				>

					<a-form-item ref="project_location" label="12. Location of Project" :colon="true">
						<a-input
							placeholder="Location of Project"
							v-decorator="['project_location', rules.project_location]"
							@blur="handleConfirmBlur"
						/>
					</a-form-item>

					<a-form-item ref="floor_area" label="13. Floor area of project occupied" :colon="true">
						<a-input
							placeholder="(in square meters)"
							v-decorator="['floor_area', rules.floor_area]"
							@blur="handleConfirmBlur"
						/>
					</a-form-item>

					<a-form-item ref="land_area" label="14. Land area of project" :colon="true">
						<a-input
							placeholder="(in square meters)"
							v-decorator="['land_area', rules.land_area]"
							@blur="handleConfirmBlur"
						/>
					</a-form-item>

					<a-form-item ref="right_over_land" label="15. Right over land (If others, please specify)" :colon="true">
						<a-input-group>
							<a-row :gutter="18">

								<a-col :span="12">
									<a-select
										v-decorator="['right_over_land', rules.right_over_land]"
										placeholder="Right over land"
										style="width: 100%;"
										@change="rightOverLand"
									>
										<template v-for="(type, index) in select_options.right_over_land">
											<a-select-option :value="type" :key="index">
												{{ type }}
											</a-select-option>
										</template>
									</a-select>
								</a-col>

								<a-col :span="12">
									<a-input
										v-model="extra_fields.right_over_land.value"
									 	placeholder="please specify here"
										:disabled="extra_fields.right_over_land.specify_field == true ? false : true"
									/>
								</a-col>

							</a-row>
						</a-input-group>
					</a-form-item>

					<a-form-item ref="project_tenure" label="16. Project Tenure" :colon="true">
						<a-input-group>
							<a-row :gutter="18">

								<a-col :span="12">
									<a-select
										v-decorator="['project_tenure', rules.project_tenure]"
										placeholder="Project Tenure"
										style="width: 100%;"
										@change="projectTenure"
									>

										<template v-for="(type, index) in select_options.project_tenure">
											<a-select-option :value="type" :key="index">
												{{ type }}
											</a-select-option>
										</template>

									</a-select>
								</a-col>

								<a-col :span="12">
									<a-input
										v-model="extra_fields.tenure_project.value"
									 	placeholder="specify no. of years"
										:disabled="extra_fields.tenure_project.specify_field == true ? false : true"
									/>
								</a-col>

							</a-row>
						</a-input-group>
					</a-form-item>

					<a-form-item ref="barangay_of_project_site" label="17. Barangay of project site" :colon="true">
						<a-select
							placeholder="please select your barangay"
							v-decorator="['barangay_of_project_site', rules.barangay_of_project_site]"
						>

							<template v-for="barangay in select_options.barangays">
								<a-select-option :value="barangay.barangay_name" :key="barangay.barangay_id">
									{{ barangay.barangay_name }}
								</a-select-option>
							</template>
						</a-select>
					</a-form-item>

					<a-form-item label="18. Preferred mode of release of decision" :colon="true">
						<a-select
							placeholder="please select your preferred mode of release"
						>
							<a-select-option value="shanghai">Zone one</a-select-option>
							<a-select-option value="beijing">Zone two</a-select-option>
						</a-select>
					</a-form-item>

					<a-form-item ref="project_cost" label="19. Project Cost/Capitalization" :colon="true">
						<a-input
							placeholder="in pesos, write in words and in this field"
							v-decorator="['project_cost', rules.project_cost]"
							@blur="handleConfirmBlur"
						/>
					</a-form-item>

					<a-form-item ref="tax_declaration_number" label="20. Tax Declaration Number" :colon="true">
						<a-input
							placeholder="Tax Declaration Number"
							v-decorator="['tax_declaration_number', rules.tax_declaration_number]"
							@blur="handleConfirmBlur"
						/>
					</a-form-item>

					<a-form-item ref="lzba_declartion_number" label="21. LZBA Declaration Number" :colon="true">
						<a-input
							placeholder="LZBA Declaration Number"
							v-decorator="['lzba_declartion_number', rules.lzba_declartion_number]"
							@blur="handleConfirmBlur"
						/>
					</a-form-item>

					<a-form-item ref="project_applied_for_the_subject_of_written_notice" :colon="true">

						<p>
							{{ '22. ' + question22 }}
						</p>

						<a-radio-group
							name="question22"
							v-decorator="['project_applied_for_the_subject_of_written_notice', rules.project_applied_for_the_subject_of_written_notice]"
							style="width: 100%;"
							@change="projectAppliedForTheSubjectOfWrittenNotice"
						>

							<a-radio value="yes">
								Yes
							</a-radio>

							<a-radio value="no">
								No
							</a-radio>

						</a-radio-group>

					</a-form-item>


				</a-col>

				<a-col
					class="gutter-row"
					:span="8"
					:style="{ display: 'block' }"
				>

					<a-form-item ref="zoning_admin_name" :colon="true">

						<p>
							If question 22 is "Yes", Please answer the following:
						</p>

						<p>
							22.a Name of HLURB Office/Zoning Administrator who issued the notice
						</p>

						<a-input
							placeholder="Name of HLURB Office/Zoning Administrator"
							v-decorator="['zoning_admin_name', rules.zoning_admin_name]"
							@blur="handleConfirmBlur"
							:disabled="extra_fields.question22.specify_field == true ? false : true"
						/>
					</a-form-item>

					<a-form-item ref="question22_date_issued" label="22.b Date of notice issued" required :colon="true">
						<a-date-picker
							show-time
							type="date"
							placeholder="Pick a date"
							style="width: 100%;"
							v-decorator="['question22_date_issued', rules.question22_date_issued]"
							:disabled="extra_fields.question22.specify_field == true ? false : true"
						/>
					</a-form-item>

					<a-form-item ref="project_applied_for_the_subject_similar_application" :colon="true">

						<p>
							{{ '23. ' + question23 }}
						</p>

						<a-radio-group
							name="question23"
							v-decorator="['project_applied_for_the_subject_similar_application', rules.project_applied_for_the_subject_similar_application]"
							style="width: 100%;"
							@change="projectAppliedForTheSubjectSimilarApplication"
						>

							<a-radio value="yes">
								Yes
							</a-radio>

							<a-radio value="no">
								No
							</a-radio>

						</a-radio-group>

					</a-form-item>

					<a-form-item ref="other_hlurb_office" :colon="true">

						<p>
							23.a Other HLURB Office(s) where similar application(s) was/were filed:
						</p>

						<a-input
							placeholder="Other HLURB Office(s)"
							v-decorator="['other_hlurb_office', rules.other_hlurb_office]"
							@blur="handleConfirmBlur"
							:disabled="extra_fields.question23.specify_field == true ? false : true"
						/>
					</a-form-item>

					<a-form-item ref="question23_date_issued" label="23.b Date of notice issued" required :colon="true">
						<a-date-picker
							show-time
							type="date"
							placeholder="Pick a date"
							style="width: 100%;"
							v-decorator="['question23_date_issued', rules.question23_date_issued]"
							:disabled="extra_fields.question23.specify_field == true ? false : true"
						/>
					</a-form-item>

					<a-form-item ref="officer_actions" label="23.c Action(s) taken by the office(s) mentioned in 22-a" :colon="true">
						<a-input
							placeholder="Action(s) taken by the office(s)"
							v-decorator="['officer_actions', rules.officer_actions]"
							@blur="handleConfirmBlur"
							:disabled="extra_fields.question23.specify_field == true ? false : true"
						/>
					</a-form-item>

					<a-form-item ref="name" label="Files" :colon="true">
						<a-upload
							action="https://www.mocky.io/v2/5cc8019d300000980a055e76"
							:default-file-list="defaultFileList"
						>
							<a-button> <a-icon type="upload" /> Click to Upload </a-button>
						</a-upload>
					</a-form-item>


				</a-col>

			</a-row>


			<a-row :gutter="18">
				<a-col
					class="gutter-row"
					:span="24"
					:style="{ display: 'block' }"
					:offset="10"
				>
					<a-form-item :colon="true">
						<a-button type="primary" @click="handleSubmit">
							Save
						</a-button>

						<a-button style="margin-left: 10px;" @click="resetForm">
							Cancel
						</a-button>
					</a-form-item>
				</a-col>
			</a-row>

		</a-form>
	</div>
</template>

<script>
import Barangay from "../../../../js/services/barangay";

export default {
	beforeCreate() {
        this.form = this.$form.createForm(this, { name: 'add_zoning'});
	},
	created() {
		this.getBarangay();
	},
	data() {
		return {
			extra_fields: {
				question22: {
					specify_field: false,
					value: '',
				},
				question23: {
					specify_field: false,
					value: '',
				},
				project_nature: {
					specify_field: false,
					value: ''
				},
				right_over_land: {
					specify_field: false,
					value: ''
				},
				tenure_project: {
					specify_field: false,
					value: ''
				},

			},
			select_options: {
				barangays: [],
				type_of_projects: [
					'Residential',
					'Institutional',
					'Industrial',
					'Commercial',
				],
				nature_of_projects: [
					'New Development',
					'Improvement',
					'Others(specify)',
				],
				project_tenure: [
					'Permanent',
					'Temporary (No. of Yrs)',
				],
				right_over_land: [
					'Owner',
					'Lessee',
					'Others(specify)',
				],
			},
			question22: 'Is this project applied for the subject of written notice(s) from the board and/or its deputized zoning administrator to the effect requiring for presentation of locational clearance/certificate of zoning compliance (LC/CZC) or to apply for (LC/CZC)?',
			question23: 'Is the project applied for the subject similar application(s) with the other offices of the board and/or deputized zoning administrator?',
			defaultFileList: [
				{
					uid: '1',
					name: 'xxx.png',
					status: 'done',
					response: 'Server Error 500', // custom error message to show
					url: 'http://www.baidu.com/xxx.png',
				},
				{
					uid: '2',
					name: 'yyy.png',
					status: 'done',
					url: 'http://www.baidu.com/yyy.png',
				},
				{
					uid: '3',
					name: 'zzz.png',
					status: 'error',
					response: 'Server Error 500', // custom error message to show
					url: 'http://www.baidu.com/zzz.png',
				},
			],
			labelCol: { span: 9 },
			wrapperCol: { span: 18 },
			other: "",
			rules: {
				company_name: {
					rules: [
						{ required: true, message: 'Please input Company Name!' }
					]
				},
				applicant_name: {
					rules: [
						{ required: true, message: 'Please input Applicant Name!' }
					]
				},
				authorized_rep: {
					rules: [
						{ required: true, message: 'Please input Authorized Representative!' }
					]
				},
				corp_address: {
					rules: [
						{ required: true, message: 'Please input Corporation Address!' }
					]
				},
				type_of_project: {
					rules: [
						{ required: true, message: 'Please input Type of Project!' }
					]
				},
				nature_of_project: {
					rules: [
						{ required: true, message: 'Please input Nature of Project!' }
					]
				},
				property_id_num: {
					rules: [
						{ required: true, message: 'Please input Property Identification Number!' }
					]
				},
				project_location: {
					rules: [
						{ required: true, message: 'Please input Location of Project!' }
					]
				},
				floor_area: {
					rules: [
						{ required: true, message: 'Please input Floor area of Project!' }
					]
				},
				land_area: {
					rules: [
						{ required: true, message: 'Please input Land area of Project!' }
					]
				},
				right_over_land: {
					rules: [
						{ required: true, message: 'Please input Right over Land!' }
					]
				},
				project_tenure: {
					rules: [
						{ required: true, message: 'Please input Project Tenure!' }
					]
				},
				barangay_of_project_site: {
					rules: [
						{ required: true, message: 'Please input Barangay of project site!' }
					]
				},
				project_cost: {
					rules: [
						{ required: true, message: 'Please input Project cost!' }
					]
				},
				tax_declaration_number: {
					rules: [
						{ required: true, message: 'Please input Tax Declaration Number!' }
					]
				},
				lzba_declartion_number: {
					rules: [
						{ required: true, message: 'Please input LZBA Declaration Number!' }
					]
				},
				project_applied_for_the_subject_of_written_notice: {
					rules: [
						{ required: true, message: 'Please choose if yes or no!' }
					]
				},
				project_applied_for_the_subject_similar_application: {
					rules: [
						{ required: true, message: 'Please choose if yes or no!' }
					]
				},
				// zoning_admin_name: {
				// 	rules: [
				// 		{ required: true, message: 'Please input HLURB Office/Zoning Administrator Name!' }
				// 	]
				// },
				// question22_date_issued: {
				// 	rules: [
				// 		{ required: true, message: 'Please input date issued!' }
				// 	]
				// },
				// other_hlurb_office: {
				// 	rules: [
				// 		{ required: true, message: 'Please input Other HLURB Office!' }
				// 	]
				// },
				// officer_actions: {
				// 	rules: [
				// 		{ required: true, message: 'Please input Action(s) taken by the office(s)!' }
				// 	]
				// },
			}
		}
	},
	methods: {
		handleChange({ file, fileList }) {
			if (file.status !== 'uploading') {
				console.log(file, fileList);
			}
		},
		handleSubmit(e) {
			console.log('handleSubmit e: ', e);
			e.preventDefault();
			this.form.validateFieldsAndScroll((err, values) => {

				if (!err) {
					console.log('Received values of form: ', values);
				} else {
					console.log('err: ', err);
				}
			});
		},
		handleConfirmBlur(e) {
			console.log('handleConfirmBlur e: ', e);

			const value = e.target.value;
			this.confirmDirty = this.confirmDirty || !!value;
		},
		natureOfProject(value) {

			if (value === 'Others(specify)') {
				this.extra_fields.project_nature.specify_field = true;
			} else {
				this.extra_fields.project_nature.specify_field = false;

			}
		},
		rightOverLand(value) {

			if (value === 'Others(specify)') {
				this.extra_fields.right_over_land.specify_field = true;
			} else {
				this.extra_fields.right_over_land.specify_field = false;

			}
		},
		projectTenure(value) {

			if (value === 'Temporary (No. of Yrs)') {
				this.extra_fields.tenure_project.specify_field = true;
			} else {
				this.extra_fields.tenure_project.specify_field = false;

			}
		},
		projectAppliedForTheSubjectOfWrittenNotice(choice) {

			if (choice.target.value == 'yes') {
				this.extra_fields.question22.specify_field = true;

				this.rules.zoning_admin_name = {
					rules: [
						{ required: true, message: 'Please input HLURB Office/Zoning Administrator Name!' }
					]
				};

				this.rules.question22_date_issued = {
					rules: [
						{ required: true, message: 'Please input date issued!' }
					]
				};

			} else {
				this.extra_fields.question22.specify_field = false;

				if (this.rules.zoning_admin_name) {
					delete this.rules.zoning_admin_name;
				}

				if (this.rules.question22_date_issued) {
					delete this.rules.question22_date_issued;
				}

				this.form.resetFields(['zoning_admin_name', 'question22_date_issued']);
			}

			this.extra_fields.question22.value = choice.target.value;
		},
		projectAppliedForTheSubjectSimilarApplication(choice) {

			if (choice.target.value == 'yes') {
				this.extra_fields.question23.specify_field = true;

				this.rules.other_hlurb_office = {
					rules: [
						{ required: true, message: 'Please input Other HLURB Office!' }
					]
				};

				this.rules.question23_date_issued = {
					rules: [
						{ required: true, message: 'Please input date issued!' }
					]
				};

				this.rules.officer_actions = {
					rules: [
						{ required: true, message: 'Please input Action(s) taken by the office(s)!' }
					]
				};

			} else {
				this.extra_fields.question23.specify_field = false;

				if (this.rules.other_hlurb_office) {
					delete this.rules.other_hlurb_office;
				}

				if (this.rules.question23_date_issued) {
					delete this.rules.question23_date_issued;
				}

				if (this.rules.officer_actions) {
					delete this.rules.officer_actions;
				}

				this.form.resetFields(['other_hlurb_office', 'question23_date_issued', 'officer_actions']);
			}

			this.extra_fields.question23.value = choice.target.value;
		},
		getBarangay() {
			Barangay.getBarangays()
					.then(response => {
						console.log('response: ', response);
						if (response.status == 200) {
							this.select_options.barangays = response.data.data;
						}
					})
					.catch(error => {
						console.log('error: ', error.response);
					})
		}
	}
}
</script>

<style lang="scss" scoped>
p {
	color: rgba(0,0,0,.85);
	line-height: 1.5;
}
</style>
