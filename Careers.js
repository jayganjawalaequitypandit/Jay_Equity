"use client";
import React, { useState } from "react";
import { useDocumentTitle } from "../../components/Common";
import Layout from "../layout/interface/Layout";
import {
  CalendarClock,
  CalendarIcon,
  ChartAreaIcon,
  Clock10Icon,
  Clock11Icon,
  GitGraphIcon,
  MailIcon,
  MailOpenIcon,
  MapIcon,
  MapPin,
  MoveRightIcon,
  NetworkIcon,
  PhoneCallIcon,
  User2Icon,
} from "lucide-react";
import axiosInstance from "../../axiosInstance";
import { Field, Form, Formik } from "formik";
import toast, { Toaster } from "react-hot-toast";
import * as Yup from "yup";

const Careers = () => {
  const [showApplyModal, setShowApplyModal] = useState(false);
  const [Position, setPosition] = useState("");
  const applyJobAPI = (data) => {
    return axiosInstance.post("/hirings", data, {
      headers: {
        "Content-Type": "multipart/form-data"
      }
    });
  };
  useDocumentTitle("Careers | EquityPandit");

  const validationSchema = Yup.object({
    name: Yup.string().required("Name is required"),

    email: Yup.string()
      .email("Invalid email")
      .required("Email is required"),

    mobile: Yup.string()
      .matches(/^[0-9]{10}$/, "Enter valid 10 digit mobile")
      .required("Mobile is required"),

    experience: Yup.string().required("Experience is required"),
    currentCtc: Yup.string().required("Current CTC is required"),
    expectedCtc: Yup.string().required("Expected CTC is required"),
    noticePeriod: Yup.string().required("Notice period is required"),
    resume: Yup.mixed()
      .required("Resume is required")
      .test("fileType", "Only PDF allowed", (file) => {
        return file && file.type === "application/pdf";
      })
      .test("fileSize", "Max size 2MB", (file) => {
        return file && file.size <= 2 * 1024 * 1024;
      }),
    remarks: Yup.string().required("Remarks is required"),
    position: Yup.string().required("Position is required")
  });
  return (
    <Layout>
      <section className="bg-green py-5 mt-5">
        <div className="container py-5">
          <div className="row g-5 align-items-center">
            <div className="col-md-6 text-center text-md-start">
              <h1
                className="fw-bold mb-3"
                style={{ color: "#222222" }}
              >
                Empower Your Journey
                <br /> Build, Innovate, Transform
              </h1>
              <a href="#openings" className="btn btn-dark">View Current Openings</a>
            </div>
            <div className="col-md-6">
              <div className="row g-3 align-items-center">
                <div className="col-md-5 col-6">
                  <div className="rounded-3 p-3 pt-5 text-black bg-white text-end shadow-sm">
                    <div className="h3 mb-0 fw-bold">1 Million+</div>
                    <small>Registered Users</small>
                  </div>
                </div>
                <div className="col-md-5 col-6">
                  <div className="rounded-3 p-3 pt-5  bg-success text-white text-end shadow-sm">
                    <div className="h3 mb-0 fw-bold">20+</div>
                    <small>Years of Experience</small>
                  </div>
                </div>
                <div className="col-md-5 col-6">
                  <div className="rounded-3 p-3 pt-5  bg-success text-white text-end shadow-sm">
                    <div className="h3 mb-0 fw-bold">11+</div>
                    <small>Prestigious Awards</small>
                  </div>
                </div>
                <div className="col-md-5 col-6">
                  <div className="rounded-3 p-3 pt-5 text-black bg-white text-end shadow-sm">
                    <div className="h3 mb-0 fw-bold">350+</div>
                    <small>Research Algorithms</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section className="my-5">
        <div className="container py-5">
          <div className="row g-3">
            <div className="col-md-12">
              <h2 className="fw-bold mb-3 text-body-emphasis">
                Work + life — helping you strike a balance
              </h2>
            </div>

            {/* <!-- 0. 5 Days Working --> */}
            <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">5 Days Working</h3>
                <p>
                  Enjoy a healthy work-life balance with weekends off to
                  recharge and spend time on personal pursuits.
                </p>
              </div>
            </div>

            {/* <!-- 1. Competitive Salary Packages --> */}
            <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Competitive Salary Packages</h3>
                <p>
                  We offer industry-leading salaries to ensure you feel valued
                  for your contributions.
                </p>
              </div>
            </div>

            {/* <!-- 2. Comprehensive Health Insurance --> */}
            {/* <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Comprehensive Health Insurance</h3>
                <p>
                  Stay healthy and secure with extensive medical, dental, and
                  vision coverage for you and your family.
                </p>
              </div>
            </div> */}

            {/* <!-- 3. Flexible Work Hours --> */}
            {/* <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Flexible Work Hours</h3>
                <p>
                  Balance work and life with flexible schedules that suit your
                  needs.
                </p>
              </div>
            </div> */}

            {/* <!-- 4. Remote Work Options --> */}
            {/* <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Remote Work Options</h3>
                <p>
                  Work from anywhere with our hybrid and fully remote
                  opportunities.
                </p>
              </div>
            </div> */}

            {/* <!-- 5. Generous Paid Time Off --> */}
            {/* <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Generous Paid Time Off</h3>
                <p>
                  Recharge and relax with ample vacation, sick leave, and
                  personal time off.
                </p>
              </div>
            </div> */}

            {/* <!-- 6. Professional Development Allowance --> */}
            {/* <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Professional Development Allowance</h3>
                <p>
                  Grow your skills with company-sponsored courses,
                  certifications, and workshops.
                </p>
              </div>
            </div> */}

            {/* <!-- 7. Retirement Savings Plan --> */}
            {/* <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Retirement Savings Plan</h3>
                <p>
                  Plan for your future with our employer-matched retirement
                  savings programs.
                </p>
              </div>
            </div> */}

            {/* <!-- 8. Employee Wellness Programs --> */}
            {/* <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Employee Wellness Programs</h3>
                <p>
                  Participate in mental health support, yoga sessions, and gym
                  memberships.
                </p>
              </div>
            </div> */}

            {/* <!-- 9. Performance-Based Incentives --> */}
            {/* <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Performance-Based Incentives</h3>
                <p>
                  Earn bonuses and rewards for meeting and exceeding your goals.
                </p>
              </div>
            </div> */}

            {/* <!-- 10. Parental Leave --> */}
            {/* <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Parental Leave</h3>
                <p>
                  Spend precious time with your growing family with paid
                  maternity and paternity leave.
                </p>
              </div>
            </div> */}

            {/* <!-- 11. Collaborative Work Environment --> */}
            <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Collaborative Work Environment</h3>
                <p>
                  Join a culture of teamwork, innovation, and open
                  communication.
                </p>
              </div>
            </div>

            {/* <!-- 12. Celebrations and Recognition --> */}
            <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Celebrations and Recognition</h3>
                <p>
                  Be part of regular team celebrations, rewards, and recognition
                  programs.
                </p>
              </div>
            </div>

            {/* <!-- 13. On-Site Snacks and Beverages --> */}
            {/* <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">On-Site Snacks and Beverages</h3>
                <p>
                  Enjoy free snacks, coffee, and refreshments to keep you
                  energized throughout the day.
                </p>
              </div>
            </div> */}

            {/* <!-- 14. Transportation Allowance --> */}
            {/* <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Transportation Allowance</h3>
                <p>
                  Save on commute expenses with subsidized travel or fuel
                  reimbursements.
                </p>
              </div>
            </div> */}

            {/* <!-- 15. Employee Referral Program --> */}
            <div className="col-md-4 d-none">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Employee Referral Program</h3>
                <p>
                  Help us grow the team and earn rewards for referring great
                  talent.
                </p>
              </div>
            </div>

            {/* <!-- 16. Team Building Activities --> */}
            <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Team Building Activities</h3>
                <p>
                  Strengthen connections with fun team outings, retreats, and
                  social events.
                </p>
              </div>
            </div>

            {/* <!-- 17. Stock Options or Profit Sharing --> */}
            {/* <div className="col-md-4">
              <div className="h-100 p-3 bg-success bg-opacity-10 rounded-3">
                <h3 className="h5 my-3">Stock Options or Profit Sharing</h3>
                <p>
                  Share in our success with equity opportunities or
                  profit-sharing plans.
                </p>
              </div>
            </div> */}
          </div>
        </div>
      </section>
      <section className="bg-success bg-gradient py-5" id="openings">
        <div className="container my-5">
          <div className="row g-3">
            <div className="col-md-12">
              <h2 className="fw-bold text-white mb-3">Our Openings</h2>

              <div className="accordion" id="accordionExample">
                {/* Node JS Developer */}
                <div className="accordion-item my-3 d-none">
                  <h2 className="accordion-header">
                    <button
                      className="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne"
                      aria-expanded="false"
                      aria-controls="collapseOne"
                    >
                      <span className="fw-bold mb-0">Flutter Developer</span>
                      <small className="text-muted ms-2"> (2 Positions)</small>
                    </button>
                  </h2>
                  <div
                    id="collapseOne"
                    className="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div className="accordion-body">
                      <div className="row g-3">
                        <div className="col-md-3">
                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MapPin size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Location</small>
                              <p className="mb-0">Surat, Gujarat, India</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <NetworkIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Department</small>
                              <p className="mb-0">Information & Technology</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <User2Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Vacancies</small>
                              <p className="mb-0">2 Positions</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <CalendarIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Working Days</small>
                              <p className="mb-0">Monday to Friday</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <Clock10Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Timings</small>
                              <p className="mb-0">09:15 AM - 06:30 PM</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <PhoneCallIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Contact Us</small>
                              {/* <p className="mb-0">+91 8000 816 688</p> */}
                              <p className="mb-0">+91 70435 34934</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MailIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Email Us</small>
                              {/* <p className="mb-0">careers@equitypandit.com</p> */}
                              <p className="mb-0">hr@equitypandit.com</p>
                            </div>
                          </div>
                        </div>
                        <div className="col-md-auto d-none d-md-block">
                          <div className="vr h-100"></div>
                        </div>
                        <div className="col-md-8">
                          <h3 className="h5 fw-bold">About the role</h3>
                          <p>
                            We are seeking a passionate Flutter Developer with 2
                            years of experience to join our team. You will play
                            a crucial role in developing and maintaining
                            cross-platform mobile applications, ensuring smooth
                            performance and an intuitive user experience.
                          </p>
                          <h3 className="h5 fw-bold">What you'll do</h3>
                          <ul>
                            <li>
                              Build and maintain cross-platform mobile
                              applications using Flutter.
                            </li>
                            <li>
                              Collaborate with UI/UX designers to translate
                              designs into high-quality applications.
                            </li>
                            <li>
                              Integrate RESTful APIs and third-party services.
                            </li>
                            <li>
                              Debug and resolve performance issues and bugs to
                              ensure optimal app performance.
                            </li>
                            <li>
                              Write clean, reusable, and maintainable code
                              following best practices.
                            </li>
                            <li>
                              Stay updated with the latest Flutter SDK and
                              related technologies.
                            </li>
                            <li>
                              Optimize app performance and troubleshoot complex
                              issues across different devices.
                            </li>
                          </ul>
                          <h3 className="h5 fw-bold">What we are looking for</h3>
                          <ul>
                            <li>
                              Experience: 2+ years in Flutter development.
                            </li>
                            <li>Strong knowledge of Dart and Flutter SDK.</li>
                            <li>
                              Familiarity with state management techniques like
                              Provider, Bloc, or Riverpod.
                            </li>
                            <li>
                              Understanding of mobile app lifecycle and
                              architectures like MVVM or MVC.
                            </li>
                            <li>
                              Experience in integrating payment gateways or
                              real-time databases like Firebase.
                            </li>
                            <li>
                              Knowledge of publishing apps on Google Play Store
                              and Apple App Store.
                            </li>
                            <li>A proactive and problem-solving mindset.</li>
                          </ul>
                          <div>
                            <br />

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <PhoneCallIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Contact Us</small>
                                {/* <p className="mb-0">+91 8000 816 688</p> */}
                                <p className="mb-0">+91 70435 34934</p>
                              </div>
                            </div>

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <MailIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Email Us</small>
                                {/* <p className="mb-0">careers@equitypandit.com</p> */}
                                <p className="mb-0">hr@equitypandit.com</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="accordion-item my-3 d-none">
                  <h2 className="accordion-header">
                    <button
                      className="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                    >
                      <span className="fw-bold mb-0">Node Js Developer </span>
                      <small className="text-muted ms-2"> (2 Positions)</small>
                    </button>
                  </h2>
                  <div
                    id="collapseTwo"
                    className="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div className="accordion-body">
                      <div className="row g-3">
                        <div className="col-md-3">
                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MapPin size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Location</small>
                              <p className="mb-0">Surat, Gujarat, India</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <NetworkIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Department</small>
                              <p className="mb-0">Information & Technology</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <User2Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Vacancies</small>
                              <p className="mb-0">2 Positions</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <CalendarIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Working Days</small>
                              <p className="mb-0">Monday to Friday</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <Clock10Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Timings</small>
                              <p className="mb-0">09:15 AM - 06:30 PM</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <PhoneCallIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Contact Us</small>
                              {/* <p className="mb-0">+91 8000 816 688</p> */}
                              <p className="mb-0">+91 70435 34934</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MailIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Email Us</small>
                              {/* <p className="mb-0">careers@equitypandit.com</p> */}
                              <p className="mb-0">hr@equitypandit.com</p>
                            </div>
                          </div>
                        </div>
                        <div className="col-md-auto d-none d-md-block">
                          <div className="vr h-100"></div>
                        </div>
                        <div className="col-md-8">
                          <h3 className="h5 fw-bold">About the role</h3>
                          <p>
                            We are looking for a skilled Node.js Developer with
                            2 years of experience to build and maintain
                            high-performance backend systems. Your work will
                            focus on delivering robust, scalable, and efficient
                            server-side applications.
                          </p>
                          <h3 className="h5 fw-bold">What you'll do</h3>
                          <ul>
                            <li>
                              Develop, test, and maintain backend applications
                              using Node.js.
                            </li>
                            <li>
                              Design RESTful APIs and ensure seamless
                              integration with front-end components.
                            </li>
                            <li>
                              Collaborate with front-end developers, product
                              managers, and stakeholders.
                            </li>
                            <li>
                              Implement security and data protection measures.
                            </li>
                            <li>
                              Optimize application performance for maximum speed
                              and scalability.
                            </li>
                            <li>
                              Troubleshoot and debug applications and database
                              queries.
                            </li>
                          </ul>
                          <h3 className="h5 fw-bold">What we are looking for</h3>
                          <ul>
                            <li>
                              Experience: 2+ years in Node.js development.
                            </li>
                            <li>Proficiency in JavaScript/TypeScript.</li>
                            <li>
                              Strong understanding of asynchronous programming
                              and event-driven architecture.
                            </li>
                            <li>
                              Experience with frameworks like Express.js or
                              Nest.js.
                            </li>
                            <li>
                              Knowledge of database technologies like MongoDB,
                              MySQL, or PostgreSQL.
                            </li>
                            <li>Experience in CI/CD pipelines.</li>
                            <li>
                              A team player with excellent problem-solving
                              abilities.
                            </li>
                          </ul>
                          <div>
                            <br />

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <PhoneCallIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Contact Us</small>
                                {/* <p className="mb-0">+91 8000 816 688</p> */}
                                <p className="mb-0">+91 70435 34934</p>
                              </div>
                            </div>

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <MailIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Email Us</small>
                                {/* <p className="mb-0">careers@equitypandit.com</p> */}
                                <p className="mb-0">hr@equitypandit.com</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="accordion-item my-3 d-none">
                  <h2 className="accordion-header">
                    <button
                      className="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    >
                      <span className="fw-bold mb-0">Digital Marketing Executive </span>
                      <small className="text-muted ms-2"> (2 Positions)</small>
                    </button>
                  </h2>
                  <div
                    id="collapseThree"
                    className="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div className="accordion-body">
                      <div className="row g-3">
                        <div className="col-md-3">
                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MapPin size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Location</small>
                              <p className="mb-0">Surat, Gujarat, India</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <NetworkIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Department</small>
                              <p className="mb-0">Digital Marketing</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <User2Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Vacancies</small>
                              <p className="mb-0">2 Positions</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <CalendarIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Working Days</small>
                              <p className="mb-0">Monday to Friday</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <Clock10Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Timings</small>
                              <p className="mb-0">09:15 AM - 06:30 PM</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <PhoneCallIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Contact Us</small>
                              {/* <p className="mb-0">+91 8000 816 688</p> */}
                              <p className="mb-0">+91 70435 34934</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MailIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Email Us</small>
                              {/* <p className="mb-0">careers@equitypandit.com</p> */}
                              <p className="mb-0">hr@equitypandit.com</p>
                            </div>
                          </div>
                        </div>
                        <div className="col-md-auto d-none d-md-block">
                          <div className="vr h-100"></div>
                        </div>
                        <div className="col-md-8">
                          <h3 className="h5 fw-bold">About the role</h3>
                          <p>
                            We are looking for a skilled Digital
                            Marketing Executive who will be responsible for developing and executing digital
                            marketing strategies to increase our online presence and drive traffic to our social
                            media channels and apps. Your role is essential in helping us achieve our business
                            objectives and reach our target audience effectively.
                          </p>
                          <h3 className="h5 fw-bold">What you'll do</h3>
                          <ul>
                            <li>
                              Create and implement inclusive digital marketing strategies by utilizing different
                              digital mediums and setting measurable KPIs
                            </li>
                            <li>
                              Collaborate with other teams (like content, sales, and customer service) to
                              ensure cohesive and effective marketing campaigns
                            </li>
                            <li>
                              Manage digital campaigns, monitor performance reports, analyze data, and make
                              data-driven recommendations.
                            </li>
                            <li>
                              Optimize website performance, including organic traffic, bounce rate, and
                              conversion rates to improve user experience and drive lead generation.
                            </li>
                            <li>
                              Conduct market research and competitive analysis to identify industry trends and
                              new growth opportunities.
                            </li>
                            <li>
                              Prepare and present monthly/quarterly reports to stakeholders.
                            </li>
                          </ul>
                          <h3 className="h5 fw-bold">What we are looking for</h3>
                          <ul>
                            <li>
                              Proven 2-3 years of experience in digital marketing.
                            </li>
                            <li>Experience with web analytics tools like Google Analytics and Search Console.
                            </li>
                            <li>
                              Proficient in marketing automation tools, such as HubSpot, Ahrefs, Yoast, etc.
                            </li>
                            <li>
                              Strong knowledge of digital marketing including strong knowledge of Email
                              Marketing, Whatsapp Marketing & App Marketing.
                            </li>
                            <li>
                              Certifications in Hubspot, Google Analytics, Google Ads, or similar.
                            </li>
                            <li>Excellent communication, presentation and interpersonal skills. </li>
                          </ul>
                          <div>
                            <br />

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <PhoneCallIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Contact Us</small>
                                {/* <p className="mb-0">+91 8000 816 688</p> */}
                                <p className="mb-0">+91 70435 34934</p>
                              </div>
                            </div>

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <MailIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Email Us</small>
                                {/* <p className="mb-0">careers@equitypandit.com</p> */}
                                <p className="mb-0">hr@equitypandit.com</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="accordion-item my-3 d-none">
                  <h2 className="accordion-header">
                    <button
                      className="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseFour"
                      aria-expanded="false"
                      aria-controls="collapseFour"
                    >
                      <span className="fw-bold mb-0">Customer Support Executive </span>
                      <small className="text-muted ms-2"> (2 Positions)</small>
                    </button>
                  </h2>
                  <div
                    id="collapseFour"
                    className="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div className="accordion-body">
                      <div className="row g-3">
                        <div className="col-md-3">
                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MapPin size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Location</small>
                              <p className="mb-0">Surat, Gujarat, India</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <NetworkIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Department</small>
                              <p className="mb-0">Support</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <User2Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Vacancies</small>
                              <p className="mb-0">2 Positions</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <CalendarIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Working Days</small>
                              <p className="mb-0">Monday to Friday</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <Clock10Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Timings</small>
                              <p className="mb-0">09:15 AM - 06:30 PM</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <PhoneCallIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Contact Us</small>
                              {/* <p className="mb-0">+91 8000 816 688</p> */}
                              <p className="mb-0">+91 70435 34934</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MailIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Email Us</small>
                              {/* <p className="mb-0">careers@equitypandit.com</p> */}
                              <p className="mb-0">hr@equitypandit.com</p>
                            </div>
                          </div>
                        </div>
                        <div className="col-md-auto d-none d-md-block">
                          <div className="vr h-100"></div>
                        </div>
                        <div className="col-md-8">
                          <h3 className="h5 fw-bold">About the role</h3>
                          <p>
                            We are looking for a skilled Customer Support Executive who will act as a
                            liaison, provide services information, answer questions, and resolve any emerging
                            problems that our customer accounts might face with accuracy and efficiency.
                          </p>
                          <h3 className="h5 fw-bold">What you'll do</h3>
                          <ul>
                            <li>
                              Manage incoming phone calls
                            </li>
                            <li>
                              Identify and assess customers’ needs to achieve satisfaction
                            </li>
                            <li>
                              Build sustainable relationships and trust with customer accounts through open
                              and interactive communication
                            </li>
                            <li>
                              Provide accurate, valid and complete information by using the right
                              methods/tools
                            </li>
                            <li>
                              Handle customer complaints, provide appropriate solutions and alternatives
                              within the time limits; follow up to ensure resolution
                            </li>
                            <li>
                              Take the extra mile to engage customers
                            </li>
                          </ul>
                          <h3 className="h5 fw-bold">What we are looking for</h3>
                          <ul>
                            <li>
                              Proven customer support 1-3 years experience is preferred
                            </li>
                            <li>Strong phone contact handling skills and active listening</li>
                            <li>
                              Familiarity with CRM systems and practices
                            </li>
                            <li>
                              Customer orientation and ability to adapt/respond to different types of characters
                            </li>
                            <li>
                              Excellent communication and presentation skills
                            </li>
                            <li>Ability to multitask, prioritize, and manage time effectively</li>
                          </ul>
                          <div>
                            <br />

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <PhoneCallIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Contact Us</small>
                                {/* <p className="mb-0">+91 8000 816 688</p> */}
                                <p className="mb-0">+91 70435 34934</p>
                              </div>
                            </div>

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <MailIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Email Us</small>
                                {/* <p className="mb-0">careers@equitypandit.com</p> */}
                                <p className="mb-0">hr@equitypandit.com</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="accordion-item my-3">
                  <h2 className="accordion-header">
                    <button
                      className="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseFive"
                      aria-expanded="false"
                      aria-controls="collapseFive"
                    >
                      <span className="fw-bold mb-0">Relationship Manager </span>
                      <small className="text-muted ms-2"> (5 Positions) - Surat</small> 
                    </button>
                  </h2>
                  <div
                    id="collapseFive"
                    className="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div className="accordion-body">
                      <div className="row g-3">
                        <div className="col-md-3">
                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MapPin size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Location</small>
                              <p className="mb-0">Surat, Gujarat, India</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <NetworkIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Department</small>
                              <p className="mb-0">Sales</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <User2Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Vacancies</small>
                              <p className="mb-0">5 Positions</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2 d-none">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <CalendarIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Working Days</small>
                              <p className="mb-0">Monday to Friday</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2 d-none">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <Clock10Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Timings</small>
                              <p className="mb-0">09:15 AM - 06:30 PM</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <PhoneCallIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Contact Us</small>
                              {/* <p className="mb-0">+91 8000 816 688</p> */}
                              <p className="mb-0">+91 70435 34934</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MailIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Email Us</small>
                              {/* <p className="mb-0">careers@equitypandit.com</p> */}
                              <p className="mb-0">hr@equitypandit.com</p>
                            </div>
                          </div>
                        </div>
                        <div className="col-md-auto d-none d-md-block">
                          <div className="vr h-100"></div>
                        </div>
                        <div className="col-md-8">
                          <h3 className="h5 fw-bold">About the role</h3>
                          <p>
                            We are looking for a skilled Relationship Managers to help us sell the learning
                            products and services that our customers have grown to rely on. The ideal candidate
                            will be a quick learner with strong negotiating skills, and the ability to showcase our
                            offerings in a compelling way. Often tasked with giving presentations, attending
                            networking events, and attending trade shows, it’s essential that our sales rep be
                            personable and professional.

                          </p>
                          <h3 className="h5 fw-bold">What you'll do</h3>
                          <ul>
                            <li>
                              Represent our company’s products and services, starting with a deep and
                              comprehensive understanding and following with consumer research to identify
                              how our solutions meet needs.
                            </li>
                            <li>
                              Maintain working relationships with existing clients to ensure exceptional
                              service and identification of potential new sales opportunities
                            </li>
                            <li>
                              The sales representative will have a strong understanding of the sales process,
                              excelling at generating sales, building relationships, and closing deals.
                            </li>
                          </ul>
                          <h3 className="h5 fw-bold">What we are looking for</h3>
                          <ul>
                            <li>
                              Experience: 0 - 3 years in Sales.
                            </li>
                            <li>NISM Certification is preferred.</li>
                            <li>Excellent communication, interpersonal, problem-solving, presentation, and
                              organizational skills</li>
                            <li>
                              Extensive sales experience
                            </li>
                            <li>
                              Intuitive and insightful, particularly regarding human behavior
                            </li>
                            <li>
                              Ability to generate revenue by identifying pain points and suggesting suitable
                              products or services
                            </li>
                            <li>Resourceful, with outstanding research skills</li>
                            <li>
                              Emboldened by challenges
                            </li>
                            <li>
                              Stock market knowledge is preferred
                            </li>
                          </ul>
                          <div>
                            <br />

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <PhoneCallIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Contact Us</small>
                                {/* <p className="mb-0">+91 8000 816 688</p> */}
                                <p className="mb-0">+91 70435 34934</p>
                              </div>
                            </div>

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <MailIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Email Us</small>
                                {/* <p className="mb-0">careers@equitypandit.com</p> */}
                                <p className="mb-0">hr@equitypandit.com</p>
                              </div>
                            </div>
                            <div className="mt-4">
                              <button
                                className="btn btn-dark px-4"
                                onClick={() => { setShowApplyModal(true); setPosition("Relationship Manager"); }}
                              >
                                Apply Now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="accordion-item my-3">
                  <h2 className="accordion-header">
                    <button
                      className="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseSix"
                      aria-expanded="false"
                      aria-controls="collapseSix"
                    >
                      <span className="fw-bold mb-0">Relationship Manager </span>
                      <small className="text-muted ms-2"> (5 Positions) - Mumbai</small> 
                    </button>
                  </h2>
                  <div
                    id="collapseSix"
                    className="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div className="accordion-body">
                      <div className="row g-3">
                        <div className="col-md-3">
                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MapPin size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Location</small>
                              <p className="mb-0">Mumbai, Maharastra, India</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <NetworkIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Department</small>
                              <p className="mb-0">Sales</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <User2Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Vacancies</small>
                              <p className="mb-0">5 Positions</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2 d-none">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <CalendarIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Working Days</small>
                              <p className="mb-0">Monday to Friday</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2 d-none">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <Clock10Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Timings</small>
                              <p className="mb-0">09:15 AM - 06:30 PM</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <PhoneCallIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Contact Us</small>
                              {/* <p className="mb-0">+91 8000 816 688</p> */}
                              <p className="mb-0">+91 70435 34934</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MailIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Email Us</small>
                              {/* <p className="mb-0">careers@equitypandit.com</p> */}
                              <p className="mb-0">hr@equitypandit.com</p>
                            </div>
                          </div>
                        </div>
                        <div className="col-md-auto d-none d-md-block">
                          <div className="vr h-100"></div>
                        </div>
                        <div className="col-md-8">
                          <h3 className="h5 fw-bold">About the role</h3>
                          <p>
                            We are looking for a skilled Relationship Managers to help us sell the learning
                            products and services that our customers have grown to rely on. The ideal candidate
                            will be a quick learner with strong negotiating skills, and the ability to showcase our
                            offerings in a compelling way. Often tasked with giving presentations, attending
                            networking events, and attending trade shows, it’s essential that our sales rep be
                            personable and professional.

                          </p>
                          <h3 className="h5 fw-bold">What you'll do</h3>
                          <ul>
                            <li>
                              Represent our company’s products and services, starting with a deep and
                              comprehensive understanding and following with consumer research to identify
                              how our solutions meet needs.
                            </li>
                            <li>
                              Maintain working relationships with existing clients to ensure exceptional
                              service and identification of potential new sales opportunities
                            </li>
                            <li>
                              The sales representative will have a strong understanding of the sales process,
                              excelling at generating sales, building relationships, and closing deals.
                            </li>
                          </ul>
                          <h3 className="h5 fw-bold">What we are looking for</h3>
                          <ul>
                            <li>
                              Experience: 0 - 3 years in Sales.
                            </li>
                            <li>NISM Certification is preferred.</li>
                            <li>Excellent communication, interpersonal, problem-solving, presentation, and
                              organizational skills</li>
                            <li>
                              Extensive sales experience
                            </li>
                            <li>
                              Intuitive and insightful, particularly regarding human behavior
                            </li>
                            <li>
                              Ability to generate revenue by identifying pain points and suggesting suitable
                              products or services
                            </li>
                            <li>Resourceful, with outstanding research skills</li>
                            <li>
                              Emboldened by challenges
                            </li>
                            <li>
                              Stock market knowledge is preferred
                            </li>
                          </ul>
                          <div>
                            <br />

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <PhoneCallIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Contact Us</small>
                                {/* <p className="mb-0">+91 8000 816 688</p> */}
                                <p className="mb-0">+91 70435 34934</p>
                              </div>
                            </div>

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <MailIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Email Us</small>
                                {/* <p className="mb-0">careers@equitypandit.com</p> */}
                                <p className="mb-0">hr@equitypandit.com</p>
                              </div>
                            </div>
                            <div className="mt-4">
                              <button
                                className="btn btn-dark px-4"
                                onClick={() => { setShowApplyModal(true); setPosition("Relationship Manager"); }}
                              >
                                Apply Now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="accordion-item my-3">
                  <h2 className="accordion-header">
                    <button
                      className="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseSeven"
                      aria-expanded="false"
                      aria-controls="collapseSeven"
                    >
                      <span className="fw-bold mb-0">Wealth Advisor </span>
                      <small className="text-muted ms-2"> (5 Positions) - Mumbai</small> 
                    </button>
                  </h2>
                  <div
                    id="collapseSeven"
                    className="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div className="accordion-body">
                      <div className="row g-3">
                        <div className="col-md-3">
                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MapPin size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Location</small>
                              <p className="mb-0">Mumbai, Maharastra, India</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <NetworkIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Department</small>
                              <p className="mb-0">Sales</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <User2Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Vacancies</small>
                              <p className="mb-0">5 Positions</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2 d-none">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <CalendarIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Working Days</small>
                              <p className="mb-0">Monday to Friday</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2 d-none">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <Clock10Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Timings</small>
                              <p className="mb-0">09:15 AM - 06:30 PM</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <PhoneCallIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Contact Us</small>
                              {/* <p className="mb-0">+91 8000 816 688</p> */}
                              <p className="mb-0">+91 70435 34934</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MailIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Email Us</small>
                              {/* <p className="mb-0">careers@equitypandit.com</p> */}
                              <p className="mb-0">hr@equitypandit.com</p>
                            </div>
                          </div>
                        </div>
                        <div className="col-md-auto d-none d-md-block">
                          <div className="vr h-100"></div>
                        </div>
                        <div className="col-md-8">
                          <h3 className="h5 fw-bold">About the role</h3>
                          <p>
                            Equitypandit is seeking a high-energy, people-first Wealth Advisor to represent the financial products and services that our customers have grown to rely on. The Wealth Advisor will handle client relationships and grow revenue.
                          </p>
                          <p>
                            The role requires someone who understands markets, communicates effectively with clients, and closes business deals. The ideal candidate will be a quick learner with strong negotiating skills and the ability to showcase our offerings compellingly.
                          </p>
                          <h3 className="h5 fw-bold">What you'll do</h3>
                          <ul>
                            <li>
                              Represent our company’s products and services, starting with a deep and
                              comprehensive understanding and following with consumer research to identify
                              how our solutions meet needs.
                            </li>
                            <li>
                              Research markets, identify potential clients, and explore new revenue channels.
                            </li>
                            <li>
                              Create and implement strategies to increase sales, expand the customer base, and meet business targets.
                            </li>
                            <li>
                              Develop strong, long-term relationships with clients, investors, and existing clients to ensure exceptional service and identification of potential new sales opportunities.
                            </li>
                            <li>
                              Track market trends and customer needs to support business decisions.
                            </li>
                            <li>
                              The sales representative will have a strong understanding of the sales process,
                              excelling at generating sales, building relationships, and closing deals.
                            </li>
                            <li>
                              Present financial products, conduct demos, and negotiate deals with clients.
                            </li>
                          </ul>
                          <h3 className="h5 fw-bold">What we are looking for</h3>
                          <ul>
                            {/* <li>
                              Experience: 0 - 3 years in Sales.
                            </li> */}
                            <li>NISM certification XA (Level 1) & XB (Level 2) is a must.</li>
                            <li>Excellent communication, interpersonal, problem-solving, presentation, and
                              organizational skills and negotiation skills.</li>
                            <li>
                              Strong knowledge of capital markets and financial products.
                            </li>
                            <li>
                              Extensive sales and relationship management experience.
                            </li>
                            <li>
                              Acquire new clients through referrals, calls, and networking.
                            </li>
                            <li>
                              Meet monthly and quarterly revenue targets.
                            </li>
                            <li>
                              Ability to generate revenue by identifying pain points and suggesting suitable
                              products or services
                            </li>
                            <li>Resourceful, with outstanding research skills.</li>
                            <li>
                              Target-driven and result-focused.
                            </li>
                            {/* <li>
                              Stock market knowledge is preferred
                            </li> */}
                          </ul>
                          <div>
                            <br />

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <PhoneCallIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Contact Us</small>
                                {/* <p className="mb-0">+91 8000 816 688</p> */}
                                <p className="mb-0">+91 70435 34934</p>
                              </div>
                            </div>

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <MailIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Email Us</small>
                                {/* <p className="mb-0">careers@equitypandit.com</p> */}
                                <p className="mb-0">hr@equitypandit.com</p>
                              </div>
                            </div>
                            <div className="mt-4">
                              <button
                                className="btn btn-dark px-4"
                                onClick={() => { setShowApplyModal(true); setPosition("Wealth Advisor"); }}
                              >
                                Apply Now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="accordion-item my-3">
                  <h2 className="accordion-header">
                    <button
                      className="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseEight"
                      aria-expanded="false"
                      aria-controls="collapseEight"
                    >
                      <span className="fw-bold mb-0">Wealth Advisor </span>
                      <small className="text-muted ms-2"> (5 Positions) - Surat</small> 
                    </button>
                  </h2>
                  <div
                    id="collapseEight"
                    className="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div className="accordion-body">
                      <div className="row g-3">
                        <div className="col-md-3">
                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MapPin size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Location</small>
                              <p className="mb-0">Surat, Gujarat, India</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <NetworkIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Department</small>
                              <p className="mb-0">Sales</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <User2Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Vacancies</small>
                              <p className="mb-0">5 Positions</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2 d-none">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <CalendarIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Working Days</small>
                              <p className="mb-0">Monday to Friday</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2 d-none">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <Clock10Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Timings</small>
                              <p className="mb-0">09:15 AM - 06:30 PM</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <PhoneCallIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Contact Us</small>
                              {/* <p className="mb-0">+91 8000 816 688</p> */}
                              <p className="mb-0">+91 70435 34934</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MailIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Email Us</small>
                              {/* <p className="mb-0">careers@equitypandit.com</p> */}
                              <p className="mb-0">hr@equitypandit.com</p>
                            </div>
                          </div>
                        </div>
                        <div className="col-md-auto d-none d-md-block">
                          <div className="vr h-100"></div>
                        </div>
                        <div className="col-md-8">
                          <h3 className="h5 fw-bold">About the role</h3>
                          <p>
                            Equitypandit is seeking a high-energy, people-first Wealth Advisor to represent the financial products and services that our customers have grown to rely on. The Wealth Advisor will handle client relationships and grow revenue.
                          </p>
                          <p>
                            The role requires someone who understands markets, communicates effectively with clients, and closes business deals. The ideal candidate will be a quick learner with strong negotiating skills and the ability to showcase our offerings compellingly.
                          </p>
                          <h3 className="h5 fw-bold">What you'll do</h3>
                          <ul>
                            <li>
                              Represent our company’s products and services, starting with a deep and
                              comprehensive understanding and following with consumer research to identify
                              how our solutions meet needs.
                            </li>
                            <li>
                              Research markets, identify potential clients, and explore new revenue channels.
                            </li>
                            <li>
                              Create and implement strategies to increase sales, expand the customer base, and meet business targets.
                            </li>
                            <li>
                              Develop strong, long-term relationships with clients, investors, and existing clients to ensure exceptional service and identification of potential new sales opportunities.
                            </li>
                            <li>
                              Track market trends and customer needs to support business decisions.
                            </li>
                            <li>
                              The sales representative will have a strong understanding of the sales process,
                              excelling at generating sales, building relationships, and closing deals.
                            </li>
                            <li>
                              Present financial products, conduct demos, and negotiate deals with clients.
                            </li>
                          </ul>
                          <h3 className="h5 fw-bold">What we are looking for</h3>
                          <ul>
                            {/* <li>
                              Experience: 0 - 3 years in Sales.
                            </li> */}
                            <li>NISM certification XA (Level 1) & XB (Level 2) is a must.</li>
                            <li>Excellent communication, interpersonal, problem-solving, presentation, and
                              organizational skills and negotiation skills.</li>
                            <li>
                              Strong knowledge of capital markets and financial products.
                            </li>
                            <li>
                              Extensive sales and relationship management experience.
                            </li>
                            <li>
                              Acquire new clients through referrals, calls, and networking.
                            </li>
                            <li>
                              Meet monthly and quarterly revenue targets.
                            </li>
                            <li>
                              Ability to generate revenue by identifying pain points and suggesting suitable
                              products or services
                            </li>
                            <li>Resourceful, with outstanding research skills.</li>
                            <li>
                              Target-driven and result-focused.
                            </li>
                            {/* <li>
                              Stock market knowledge is preferred
                            </li> */}
                          </ul>
                          <div>
                            <br />

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <PhoneCallIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Contact Us</small>
                                {/* <p className="mb-0">+91 8000 816 688</p> */}
                                <p className="mb-0">+91 70435 34934</p>
                              </div>
                            </div>

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <MailIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Email Us</small>
                                {/* <p className="mb-0">careers@equitypandit.com</p> */}
                                <p className="mb-0">hr@equitypandit.com</p>
                              </div>
                            </div>
                            <div className="mt-4">
                              <button
                                className="btn btn-dark px-4"
                                onClick={() => { setShowApplyModal(true); setPosition("Wealth Advisor"); }}
                              >
                                Apply Now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="accordion-item my-3">
                  <h2 className="accordion-header">
                    <button
                      className="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseNine"
                      aria-expanded="false"
                      aria-controls="collapseNine"
                    >
                      <span className="fw-bold mb-0">Compliance Officer</span>
                      <small className="text-muted ms-2"> (1 Position) - Surat</small> 
                    </button>
                  </h2>
                  <div
                    id="collapseNine"
                    className="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div className="accordion-body">
                      <div className="row g-3">
                        <div className="col-md-3">
                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MapPin size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Location</small>
                              <p className="mb-0">Surat, Gujarat, India</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <NetworkIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Department</small>
                              <p className="mb-0">Management</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <User2Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Vacancies</small>
                              <p className="mb-0">1 Position</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2 d-none">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <CalendarIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Working Days</small>
                              <p className="mb-0">Monday to Friday</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2 d-none">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <Clock10Icon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Timings</small>
                              <p className="mb-0">09:15 AM - 06:30 PM</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <PhoneCallIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Contact Us</small>
                              {/* <p className="mb-0">+91 8000 816 688</p> */}
                              <p className="mb-0">+91 70435 34934</p>
                            </div>
                          </div>

                          <div className="d-flex align-items-center my-2">
                            <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                              <MailIcon size={16} />
                            </div>

                            <div className="ms-2">
                              <small className="text-muted">Email Us</small>
                              {/* <p className="mb-0">careers@equitypandit.com</p> */}
                              <p className="mb-0">hr@equitypandit.com</p>
                            </div>
                          </div>
                        </div>
                        <div className="col-md-auto d-none d-md-block">
                          <div className="vr h-100"></div>
                        </div>
                        <div className="col-md-8">
                          <h3 className="h5 fw-bold">About the role</h3>
                          <p>
                            EquityPandit Financial Services Private Limited is seeking an experienced Compliance Officer who will handle end-to-end compliance activities, with a strong focus on SEBI regulations, statutory filings, and governance support.
                          </p>
                          <p>
                            If you enjoy keeping things in order, spotting risks before they become problems, and ensuring the company stays on the right side of the law, this role is for you.
                          </p>
                          <h3 className="h5 fw-bold">What you'll do</h3>
                          <ul>
                            <li>
                              Manage all SEBI-related compliances, filings, and disclosures.
                            </li>
                            <li>
                              Prepare and file reports with stock exchanges and regulatory bodies.
                            </li>
                            <li>
                              Maintain statutory registers, minutes, resolutions, and secretarial records.
                            </li>
                            <li>
                              Support Board and Committee meetings — drafting agendas, notices, and minutes.
                            </li>
                            <li>
                              Monitor changes in laws and ensure the company remains up to date and compliant.
                            </li>
                            <li>
                              Coordinate with auditors, regulators, and internal teams for timely submissions.
                            </li>
                            <li>
                              Review agreements, policies, and processes for compliance gaps.
                            </li>
                            <li>
                              Assist in drafting corporate governance documents and internal compliance frameworks.
                            </li>
                            <li>
                              Maintain documentation for inspections, audits, and internal reviews.
                            </li>
                          </ul>
                          <h3 className="h5 fw-bold">What we are looking for</h3>
                          <ul>
                            {/* <li>
                              Experience: 0 - 3 years in Sales.
                            </li> */}
                            <li>Qualified Company Secretary (CS) certification is a must.</li>
                            <li>3+ years of experience with SEBI Regulations (Investment Advisor/Broking/PMS/AIF).</li>
                            <li>
                              Good drafting, reporting, and communication skills.
                            </li>
                            {/* <li>
                              Extensive sales and relationship management experience.
                            </li>
                            <li>
                              Acquire new clients through referrals, calls, and networking.
                            </li>
                            <li>
                              Meet monthly and quarterly revenue targets.
                            </li>
                            <li>
                              Ability to generate revenue by identifying pain points and suggesting suitable
                              products or services
                            </li>
                            <li>Resourceful, with outstanding research skills.</li>
                            <li>
                              Target-driven and result-focused.
                            </li> */}
                            {/* <li>
                              Stock market knowledge is preferred
                            </li> */}
                          </ul>
                          <div>
                            <br />

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <PhoneCallIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Contact Us</small>
                                {/* <p className="mb-0">+91 8000 816 688</p> */}
                                <p className="mb-0">+91 70435 34934</p>
                              </div>
                            </div>

                            <div className="d-flex align-items-center my-2">
                              <div className="bg-primary bg-opacity-10 rounded-3 p-3">
                                <MailIcon size={16} />
                              </div>

                              <div className="ms-2">
                                <small className="text-muted">Email Us</small>
                                {/* <p className="mb-0">careers@equitypandit.com</p> */}
                                <p className="mb-0">hr@equitypandit.com</p>
                              </div>
                            </div>
                            <div className="mt-4">
                              <button
                                className="btn btn-dark px-4"
                                onClick={() => { setShowApplyModal(true); setPosition("Compliance Officer"); }}
                              >
                                Apply Now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                {/* Add similar structure for PHP Developer and Flutter Developer */}
              </div>
              {showApplyModal && <div className="modal-backdrop fade show"></div>}
              {showApplyModal && (
                <div
                  className="modal show d-block"
                  tabIndex="-1"
                  role="dialog"
                  aria-modal="true"
                  aria-labelledby="career-apply-title"
                >
                  <div className="modal-dialog modal-lg">
                    <div className="modal-content">

                      {/* Header */}
                      <div className="modal-header">
                        <h2 id="career-apply-title" className="modal-title h5">Apply for {Position}</h2>
                        <button
                          type="button"
                          className="btn-close"
                          aria-label="Close application form"
                          onClick={() => setShowApplyModal(false)}
                        ></button>
                      </div>

                      {/* Formik Form */}
                      <Formik
                        initialValues={{
                          name: "",
                          email: "",
                          mobile: "",
                          experience: "",
                          currentCtc: "",
                          expectedCtc: "",
                          noticePeriod: "",
                          resume: null,
                          remarks: "",
                          position: Position
                        }}
                        validationSchema={validationSchema}
                        onSubmit={(values, { setSubmitting, resetForm }) => {
                          const formData = new FormData();

                          Object.keys(values).forEach((key) => {
                            formData.append(key, values[key]);
                          });

                          applyJobAPI(formData)
                            .then(() => {
                              toast.success("Applied successfully! HR will call you shortly");
                              resetForm();
                              setShowApplyModal(false);
                            })
                            .catch(() => {
                              toast.error("Something went wrong");
                            })
                            .finally(() => setSubmitting(false));
                        }}
                      >
                        {({ setFieldValue, isSubmitting, errors, touched }) => (
                          <Form>

                            <div className="modal-body row">

                              {/* Name */}
                              <div className="col-md-6 mb-3">
                                <div className="form-floating">
                                  <Field
                                    id="career-name"
                                    name="name"
                                    className="form-control"
                                    placeholder="Name"
                                    autoComplete="name"
                                    required
                                    aria-required="true"
                                    aria-invalid={touched.name && errors.name ? "true" : "false"}
                                    aria-describedby={touched.name && errors.name ? "career-name-error" : undefined}
                                  />
                                  <label htmlFor="career-name">Name</label>
                                </div>
                                {touched.name && errors.name && <small id="career-name-error" className="text-danger" role="alert">{errors.name}</small>}
                              </div>

                              {/* Email */}
                              <div className="col-md-6 mb-3">
                                <div className="form-floating">
                                  <Field
                                    id="career-email"
                                    name="email"
                                    type="email"
                                    className="form-control"
                                    placeholder="Email"
                                    autoComplete="email"
                                    required
                                    aria-required="true"
                                    aria-invalid={touched.email && errors.email ? "true" : "false"}
                                    aria-describedby={touched.email && errors.email ? "career-email-error" : undefined}
                                  />
                                  <label htmlFor="career-email">Email</label>
                                </div>
                                {touched.email && errors.email && <small id="career-email-error" className="text-danger" role="alert">{errors.email}</small>}
                              </div>

                              {/* Mobile */}
                              <div className="col-md-6 mb-3">
                                <div className="form-floating">
                                  <Field
                                    id="career-mobile"
                                    name="mobile"
                                    className="form-control"
                                    placeholder="Mobile"
                                    autoComplete="tel"
                                    inputMode="numeric"
                                    maxLength={10}
                                    required
                                    aria-required="true"
                                    aria-invalid={touched.mobile && errors.mobile ? "true" : "false"}
                                    aria-describedby={touched.mobile && errors.mobile ? "career-mobile-error" : undefined}
                                  />
                                  <label htmlFor="career-mobile">Mobile</label>
                                </div>
                                {touched.mobile && errors.mobile && <small id="career-mobile-error" className="text-danger" role="alert">{errors.mobile}</small>}
                              </div>

                              {/* Experience */}
                              <div className="col-md-6 mb-3">
                                <div className="form-floating">
                                  <Field
                                    id="career-experience"
                                    name="experience"
                                    className="form-control"
                                    placeholder="Experience"
                                    autoComplete="off"
                                    required
                                    aria-required="true"
                                    aria-invalid={touched.experience && errors.experience ? "true" : "false"}
                                    aria-describedby={touched.experience && errors.experience ? "career-experience-error" : undefined}
                                  />
                                  <label htmlFor="career-experience">Experience <small><small>(in years)</small></small></label>
                                </div>
                                {touched.experience && errors.experience && <small id="career-experience-error" className="text-danger" role="alert">{errors.experience}</small>}
                              </div>

                              {/* Current CTC */}
                              <div className="col-md-6 mb-3">
                                <div className="form-floating">
                                  <Field
                                    id="career-current-ctc"
                                    name="currentCtc"
                                    className="form-control"
                                    placeholder="Current CTC"
                                    autoComplete="off"
                                    required
                                    aria-required="true"
                                    aria-invalid={touched.currentCtc && errors.currentCtc ? "true" : "false"}
                                    aria-describedby={touched.currentCtc && errors.currentCtc ? "career-current-ctc-error" : undefined}
                                  />
                                  <label htmlFor="career-current-ctc">Current CTC <small><small>(in LPA)</small></small></label>
                                </div>
                                {touched.currentCtc && errors.currentCtc && <small id="career-current-ctc-error" className="text-danger" role="alert">{errors.currentCtc}</small>}
                              </div>

                              {/* Expected CTC */}
                              <div className="col-md-6 mb-3">
                                <div className="form-floating">
                                  <Field
                                    id="career-expected-ctc"
                                    name="expectedCtc"
                                    className="form-control"
                                    placeholder="Expected CTC"
                                    autoComplete="off"
                                    required
                                    aria-required="true"
                                    aria-invalid={touched.expectedCtc && errors.expectedCtc ? "true" : "false"}
                                    aria-describedby={touched.expectedCtc && errors.expectedCtc ? "career-expected-ctc-error" : undefined}
                                  />
                                  <label htmlFor="career-expected-ctc">Expected CTC <small><small>(in LPA)</small></small></label>
                                </div>
                                {touched.expectedCtc && errors.expectedCtc && <small id="career-expected-ctc-error" className="text-danger" role="alert">{errors.expectedCtc}</small>}
                              </div>

                              {/* Notice Period */}
                              <div className="col-md-6 mb-3">
                                <div className="form-floating">
                                  <Field
                                    id="career-notice-period"
                                    name="noticePeriod"
                                    className="form-control"
                                    placeholder="Notice Period"
                                    autoComplete="off"
                                    required
                                    aria-required="true"
                                    aria-invalid={touched.noticePeriod && errors.noticePeriod ? "true" : "false"}
                                    aria-describedby={touched.noticePeriod && errors.noticePeriod ? "career-notice-period-error" : undefined}
                                  />
                                  <label htmlFor="career-notice-period">Notice Period <small><small>(in days)</small></small></label>
                                </div>
                                {touched.noticePeriod && errors.noticePeriod && <small id="career-notice-period-error" className="text-danger" role="alert">{errors.noticePeriod}</small>}
                              </div>

                              {/* Resume */}
                              <div className="col-md-6 mb-3">
                                <label className="form-label" htmlFor="career-resume">Upload Resume (PDF only)</label>
                                <input
                                  id="career-resume"
                                  name="resume"
                                  type="file"
                                  className="form-control"
                                  accept="application/pdf"
                                  required
                                  aria-required="true"
                                  aria-invalid={touched.resume && errors.resume ? "true" : "false"}
                                  aria-describedby={touched.resume && errors.resume ? "career-resume-error" : undefined}
                                  onChange={(e) =>
                                    setFieldValue("resume", e.currentTarget.files[0])
                                  }
                                />
                                {touched.resume && errors.resume && <small id="career-resume-error" className="text-danger" role="alert">{errors.resume}</small>}
                              </div>

                              {/* Remarks */}
                              <div className="col-12 mb-3">
                                <div className="form-floating">
                                  <Field
                                    id="career-remarks"
                                    as="textarea"
                                    name="remarks"
                                    className="form-control"
                                    placeholder="Remarks"
                                    autoComplete="off"
                                    required
                                    aria-required="true"
                                    aria-invalid={touched.remarks && errors.remarks ? "true" : "false"}
                                    aria-describedby={touched.remarks && errors.remarks ? "career-remarks-error" : undefined}
                                    style={{ height: "100px" }}
                                  />
                                  <label htmlFor="career-remarks">Remarks</label>
                                </div>
                                {touched.remarks && errors.remarks && <small id="career-remarks-error" className="text-danger" role="alert">{errors.remarks}</small>}
                              </div>

                            </div>

                            {/* Footer */}
                            <div className="modal-footer">
                              <button
                                type="submit"
                                className="btn btn-dark"
                                disabled={isSubmitting}
                              >
                                {isSubmitting ? "Applying..." : "Apply"}
                              </button>
                            </div>
                          </Form>
                        )}
                      </Formik>

                    </div>
                  </div>
                </div>
              )}
            </div>
          </div>
        </div>
      </section>
      <Toaster />
    </Layout>
  );
};

export default Careers;
