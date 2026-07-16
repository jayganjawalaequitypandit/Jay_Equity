"use client";
import React from "react";
import { useDocumentTitle } from "../../components/Common";
import Layout from "../layout/interface/Layout";
import { useTheme } from "../../hooks/useTheme";

const InvestorGrievance = () => {
  useDocumentTitle("Investor Grievance | EquityPandit");
  const { isDark } = useTheme();

  const UI = (
    <>
      <section className={isDark ? "welcome-hero-dark-section py-3 mt-md-5" : "welcome-hero-light py-3 mt-5"}>
        <div className="container py-5">
          <div className="row g-3 align-items-center justify-content-center">
            <div className="col-md-12">
              <h1 className="fw-bold mb-3">Investor Grievance</h1>
              <div className="table-responsive">
                <h2
                  id="monthly-complaints-heading"
                  className="h5 fw-bold mb-3"
                >
                  Data For The Month Ending
                </h2>
                <table
                  className="table table-bordered table-sm text-center align-middle d-none"
                  style={{ fontSize: "13px" }}
                >
                  <thead>
                    <tr>
                      <th className="bg-secondary bg-opacity-10" colSpan="8">
                        <h5 className="fw-bold mt-2">
                          Data For The Month Ending October 2025
                        </h5>
                      </th>
                    </tr>
                    <tr>
                      {/* <th style={{ minWidth: "50px" }}>Sr. No</th> */}
                      <th style={{ minWidth: "230px" }}>
                        Received <br />
                        From
                      </th>
                      <th style={{ minWidth: "160px" }}>
                        Pending at the <br />
                        end of last month
                      </th>
                      <th>Received </th>
                      <th>Resolved*</th>
                      <th style={{ minWidth: "160px" }}>Total Pending</th>
                      <th style={{ minWidth: "160px" }}>
                        {`Pending complaints`} <br />
                        {`Greater Than 3 months`}
                      </th>
                      <th style={{ minWidth: "160px" }}>
                        Average Resolution time
                        <br /> <small>(in days)</small>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      {/* <td>1</td> */}
                      <td>Directly from Investors</td>
                      <td>0</td>
                      <td>0</td>
                      <td>N/A</td>
                      <td>N/A</td>
                      <td>0</td>
                      <td>N/A</td>
                    </tr>
                    <tr>
                      {/* <td>2</td> */}
                      <td>SEBI (SCORES )</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      {/* <td>3</td> */}
                      <td>Other Sources (if any)</td>
                      <td>0</td>
                      <td>0</td>
                      <td>N/A</td>
                      <td>N/A</td>
                      <td>0</td>
                      <td>N/A</td>
                    </tr>
                    <tr className="fw-bold">
                      {/* <td></td> */}
                      <td>Grand Total</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                  </tbody>
                </table>
                <iframe
                  src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQJwDlK9Txp-SXNLg_Zv8BY7Cf7LFurznhwGfmp8Px7a9rJL23ig_Zz8SW-kDFa1omf5rDpXsAudDsg/pubhtml?gid=0&single=true&chrome=false&widget=true&headers=false&rm=minimal"
                  title="Data For The Month Ending October 2025"
                  aria-label="Data For The Month Ending October 2025"
                  aria-labelledby="monthly-complaints-heading"
                  width="100%"
                  height="200"
                  frameBorder="0"
                  style={{ border: "1px solid #ddd", borderRadius: "8px", marginBottom: "20px" }}
                ></iframe>
              </div>
              <div className="mb-5 mt-2">
                <p className="mb-1">
                  <small>
                    * Inclusive of complaints of previous month resolved in the
                    current month.
                  </small>
                </p>
                <p className="mb-1">
                  <small>
                    # Inclusive of complaints pending as on the last day of the
                    month.
                  </small>
                </p>
                <p className="mb-1">
                  <small>
                    ^Average resolution time is the sum of time taken to resolve
                    each complaints in days, in the current month divided by
                    total number of complaints resolve in the current month.
                  </small>
                </p>
              </div>
              <div className="table-responsive mt-3">
                <h2
                  id="monthly-disposal-heading"
                  className="h5 fw-bold mb-3"
                >
                  Trend Of Monthly Disposal Of Complaints
                </h2>
                <table
                  className="table table-bordered table-sm text-center align-middle d-none"
                  style={{ fontSize: "13px" }}
                >
                  <thead>
                    <tr>
                      <th className="bg-secondary bg-opacity-10" colSpan="6">
                        <h5 className="fw-bold mt-2">
                          Trend Of Monthly Disposal Of Complaints
                        </h5>
                      </th>
                    </tr>
                    <tr>
                      <th style={{ minWidth: "50px" }}>Sr. No</th>
                      <th style={{ minWidth: "80px" }}>Month</th>
                      <th style={{ minWidth: "150px" }}>
                        Carried forward from
                        <br /> previous month
                      </th>
                      <th>Received</th>
                      <th>Resolved*</th>
                      <th>Pending#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Apr, 2025</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>May, 2025</td>
                      <td>0</td>
                      <td>1</td>
                      <td>1</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Jun, 2025</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>July, 2025</td>
                      <td>0</td>
                      <td>1</td>
                      <td>1</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Aug, 2025</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Sept, 2025</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Oct, 2025</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    {/*<tr>
                      <td>8</td>
                      <td>Nov, 2025</td>
                      <td>0</td>
                      <td>0</td>
                      <td>N/A</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Dec, 2025</td>
                      <td>0</td>
                      <td>0</td>
                      <td>N/A</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Jan, 2026</td>
                      <td>0</td>
                      <td>0</td>
                      <td>N/A</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>Feb, 2026</td>
                      <td>0</td>
                      <td>0</td>
                      <td>N/A</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td>Mar, 2026</td>
                      <td>0</td>
                      <td>0</td>
                      <td>N/A</td>
                      <td>0</td>
                    </tr> */}
                    <tr className="fw-bold">
                      <td></td>
                      <td>Grand Total</td>
                      <td>-</td>
                      <td>2</td>
                      <td>2</td>
                      <td>0</td>
                    </tr>
                  </tbody>
                </table>
                <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQJwDlK9Txp-SXNLg_Zv8BY7Cf7LFurznhwGfmp8Px7a9rJL23ig_Zz8SW-kDFa1omf5rDpXsAudDsg/pubhtml?gid=187827722&amp;chrome=false&single=true&amp;widget=true&amp;headers=false&rm=minimal"
                  title="Trend Of Monthly Disposal Of Complaints"
                  aria-label="Trend Of Monthly Disposal Of Complaints"
                  aria-labelledby="monthly-disposal-heading"
                  width="100%"
                  height="300"
                  frameBorder="0"
                  style={{ border: "1px solid #ddd", borderRadius: "8px" }}></iframe>
              </div>
              <div className="mb-5 mt-2">
                <p className="mb-1">
                  <small>
                    * Inclusive of complaints of previous month resolved in the
                    current month.
                  </small>
                </p>
                <p className="mb-1">
                  <small>
                    # Inclusive of complaints pending as on the last day of the
                    month.
                  </small>
                </p>
              </div>
              <div className="table-responsive mt-3">
                <h2
                  id="annual-disposal-heading"
                  className="h5 fw-bold mb-3"
                >
                  Trend Of Annual Disposal Of Complaints
                </h2>
                <table
                  className="table table-bordered table-sm text-center align-middle d-none"
                  style={{ fontSize: "13px" }}
                >
                  <thead>
                    <tr>
                      <th className="bg-secondary bg-opacity-10" colSpan="6">
                        <h5 className="fw-bold mt-2">
                          Trend Of Annual Disposal Of Complaints
                        </h5>
                      </th>
                    </tr>
                    <tr>
                      <th style={{ minWidth: "50px" }}>Sr. No</th>
                      <th style={{ minWidth: "80px" }}>Year</th>
                      <th style={{ minWidth: "150px" }}>
                        Carried forward from
                        <br /> previous year
                      </th>
                      <th>Received</th>
                      <th>Resolved*</th>
                      <th>Pending#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>2018-19</td>
                      <td>0</td>
                      <td>3</td>
                      <td>3</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>2019-20</td>
                      <td>1</td>
                      <td>3</td>
                      <td>4</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>2020-21</td>
                      <td>0</td>
                      <td>2</td>
                      <td>2</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>2021-22</td>
                      <td>0</td>
                      <td>1</td>
                      <td>1</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>2022-23</td>
                      <td>0</td>
                      <td>0</td>
                      <td>N/A</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>2023-24</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>2024-25</td>
                      <td>0</td>
                      <td>4</td>
                      <td>4</td>
                      <td>0</td>
                    </tr>
                    <tr className="fw-bold">
                      <td></td>
                      <td>Grand Total</td>
                      <td>-</td>
                      <td>13</td>
                      <td>13</td>
                      <td>0</td>
                    </tr>
                  </tbody>
                </table>
                <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQJwDlK9Txp-SXNLg_Zv8BY7Cf7LFurznhwGfmp8Px7a9rJL23ig_Zz8SW-kDFa1omf5rDpXsAudDsg/pubhtml?gid=1698791034&amp;chrome=false&single=true&amp;widget=true&amp;headers=false&rm=minimal"
                  title="Trend Of Annual Disposal Of Complaints"
                  aria-label="Trend Of Annual Disposal Of Complaints"
                  aria-labelledby="annual-disposal-heading"
                  width="100%"
                  height="300"
                  frameBorder="0"
                  style={{ border: "1px solid #ddd", borderRadius: "8px" }}></iframe>
              </div>
              <div className="mb-5 mt-2">
                <p className="mb-1">
                  <small>
                    * Inclusive of complaints of previous year resolved in the
                    current year.
                  </small>
                </p>
                <p className="mb-1">
                  <small>
                    # Inclusive of complaints pending as on the last day of the
                    year.
                  </small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );

  return <Layout>{UI}</Layout>;
};

export default InvestorGrievance;
